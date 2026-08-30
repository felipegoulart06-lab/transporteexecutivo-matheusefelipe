create or replace function public.enviar_solicitacao_transporte(p_dados jsonb)
returns uuid
language plpgsql
security definer
set search_path = public, pg_temp
as $$
declare
  v_id uuid;
  v_hash text;
  v_pessoas integer;
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
  begin
    v_pessoas := (p_dados->>'pessoas')::integer;
  exception when others then
    raise exception 'Quantidade de passageiros inválida';
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
    or p_dados->>'email' !~* '^[^[:space:]@]+@[^[:space:]@]+\.[^[:space:]@]+$'
    or length(p_dados->>'email') > 254
    or p_dados->>'whatsapp' !~ '^[0-9]{10,11}$'
    or p_dados->>'data' !~ '^[0-9]{4}-[0-9]{2}-[0-9]{2}$'
    or p_dados->>'horario' !~ '^[0-9]{2}:[0-9]{2}$'
    or length(coalesce(p_dados->>'mensagem', '')) > 1000 then
    raise exception 'Campos da solicitação inválidos';
  end if;

  if (
    select count(*)
    from public.solicitacoes_servicos
    where tipo_servico = 'transporte_executivo_site'
      and created_at > now() - interval '1 minute'
  ) >= 30 then
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

  v_limpo := jsonb_build_object(
    'estado', p_dados->>'estado',
    'uf', p_dados->>'uf',
    'cidade', p_dados->>'cidade',
    'cidade_destino', p_dados->>'cidade_destino',
    'endereco', p_dados->>'endereco',
    'pessoas', v_pessoas,
    'tipo', p_dados->>'tipo',
    'nome', p_dados->>'nome',
    'email', p_dados->>'email',
    'whatsapp', p_dados->>'whatsapp',
    'data', p_dados->>'data',
    'horario', p_dados->>'horario',
    'mensagem', coalesce(p_dados->>'mensagem', ''),
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
  'Recebe orçamentos anônimos validados do site transporteexecutivo.com; acesso à tabela permanece bloqueado por RLS.';
