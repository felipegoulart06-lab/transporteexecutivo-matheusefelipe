create index if not exists solicitacoes_servicos_transporte_created_at_idx
  on public.solicitacoes_servicos (created_at desc)
  where tipo_servico = 'transporte_executivo_site';

create index if not exists solicitacoes_servicos_transporte_email_idx
  on public.solicitacoes_servicos (
    (lower(dados_solicitacao->>'email')),
    created_at desc
  )
  where tipo_servico = 'transporte_executivo_site';

create index if not exists solicitacoes_servicos_transporte_whatsapp_idx
  on public.solicitacoes_servicos (
    (dados_solicitacao->>'whatsapp'),
    created_at desc
  )
  where tipo_servico = 'transporte_executivo_site';

create or replace function public.enviar_solicitacao_transporte(p_dados jsonb)
returns uuid
language plpgsql
security definer
set search_path = public, pg_temp
set statement_timeout = '5s'
as $$
declare
  v_id uuid;
  v_hash text;
  v_pessoas integer;
  v_data date;
  v_horario time;
  v_email text;
  v_whatsapp text;
  v_limpo jsonb;
begin
  if jsonb_typeof(p_dados) <> 'object' or octet_length(p_dados::text) > 12000 then
    raise exception 'Dados de solicitação inválidos';
  end if;

  if not (p_dados ?& array[
    'estado', 'uf', 'cidade', 'cidade_destino', 'endereco', 'pessoas',
    'tipo', 'nome', 'email', 'whatsapp', 'data', 'horario', '_submission_hash'
  ]) then
    raise exception 'Campos obrigatórios ausentes';
  end if;

  v_hash := p_dados->>'_submission_hash';
  v_email := lower(trim(p_dados->>'email'));
  v_whatsapp := p_dados->>'whatsapp';

  begin
    v_pessoas := (p_dados->>'pessoas')::integer;
    v_data := (p_dados->>'data')::date;
    v_horario := (p_dados->>'horario')::time;
  exception when others then
    raise exception 'Data, horário ou quantidade de passageiros inválidos';
  end;

  if v_hash !~ '^[a-f0-9]{64}$'
    or p_dados->>'uf' !~ '^[A-Z]{2}$'
    or length(p_dados->>'estado') not between 2 and 80
    or length(p_dados->>'cidade') not between 2 and 100
    or length(p_dados->>'cidade_destino') not between 2 and 100
    or length(p_dados->>'endereco') not between 8 and 200
    or v_pessoas not between 1 and 16
    or p_dados->>'tipo' not in ('Somente ida', 'Ida e volta', 'Por hora — a disposição')
    or length(p_dados->>'nome') not between 5 and 120
    or p_dados->>'nome' !~ '[[:space:]]'
    or v_email !~ '^[^[:space:]@]+@[^[:space:]@]+\.[^[:space:]@]+$'
    or length(v_email) > 254
    or v_whatsapp !~ '^[0-9]{10,11}$'
    or v_data < current_date
    or v_data > current_date + 730
    or length(coalesce(p_dados->>'mensagem', '')) > 1000 then
    raise exception 'Campos da solicitação inválidos';
  end if;

  if (
    select count(*)
    from public.solicitacoes_servicos
    where tipo_servico = 'transporte_executivo_site'
      and created_at > now() - interval '1 minute'
  ) >= 10 then
    raise exception 'Limite temporário de solicitações atingido';
  end if;

  if (
    select count(*)
    from public.solicitacoes_servicos
    where tipo_servico = 'transporte_executivo_site'
      and created_at > now() - interval '10 minutes'
      and dados_solicitacao->>'_submission_hash' = v_hash
  ) >= 3 then
    raise exception 'Aguarde antes de enviar outra solicitação';
  end if;

  if (
    select count(*)
    from public.solicitacoes_servicos
    where tipo_servico = 'transporte_executivo_site'
      and created_at > now() - interval '1 hour'
      and (
        lower(dados_solicitacao->>'email') = v_email
        or dados_solicitacao->>'whatsapp' = v_whatsapp
      )
  ) >= 3 then
    raise exception 'Limite de solicitações por contato atingido';
  end if;

  v_limpo := jsonb_build_object(
    'estado', trim(p_dados->>'estado'),
    'uf', p_dados->>'uf',
    'cidade', trim(p_dados->>'cidade'),
    'cidade_destino', trim(p_dados->>'cidade_destino'),
    'endereco', trim(p_dados->>'endereco'),
    'pessoas', v_pessoas,
    'tipo', p_dados->>'tipo',
    'nome', trim(p_dados->>'nome'),
    'email', v_email,
    'whatsapp', v_whatsapp,
    'data', to_char(v_data, 'YYYY-MM-DD'),
    'horario', to_char(v_horario, 'HH24:MI'),
    'mensagem', trim(coalesce(p_dados->>'mensagem', '')),
    'quando', coalesce(p_dados->>'quando', ''),
    '_submission_hash', v_hash
  );

  insert into public.solicitacoes_servicos (tipo_servico, status, dados_solicitacao)
  values ('transporte_executivo_site', 'pendente', v_limpo)
  returning id into v_id;

  return v_id;
end;
$$;

revoke all on function public.enviar_solicitacao_transporte(jsonb) from public;
grant execute on function public.enviar_solicitacao_transporte(jsonb)
  to anon, authenticated, service_role;

comment on function public.enviar_solicitacao_transporte(jsonb) is
  'Recebe orçamentos anônimos validados, normalizados e limitados por janela, hash e contato.';
