<x-mail::message>
# O {{$data['nome']}} solicitou um orçamento com os dados:

## Email: {{$data['email']}}
## endereco: {{empty($data['endereco'])?'':$data['endereco']}}
## tipo_orcamento: {{$data['tipo_orcamento']}}
## Opções: {{$data['opcoes_escolhida']}}
## Quantidade de páginas: {{$data['qtd_paginas']}}
## Tem autenticação: {{$data['autenticacao']==1?'SIM':'NÂO'}}
## Tem pagamento: {{$data['autenticacao']==1?'SIM':'NÂO'}}

Obrigado,<br>
{{ config('app.name') }}
</x-mail::message>
