<?php

namespace Tests\Feature;

use Tests\TestCase;

class OrcamentoApiTest extends TestCase
{
    /**
     * Error create new orcamento web
     *
     * @return void
     */
    public function test_inserir_orcamento_web_endpoin_api_erro(): void
    {
        $orcamento_data = [
            'nome' => 'Felipe R Farias',
            'email' => 'feliperfariasdev@gmail.com',
            'endereco' => 'R. Francelizio Oliveira Coelho Filho, 149 - Praia do PartidoSão Sebastião - SP, 11606-160',
            'tipo_orcamento' => 'Web',
            'opcoes_escolhida' => 'Chrome;Safari;Firefox',
            'qtd_paginas' => '10',
            'autenticacao' => 1,
            'pagamento' => 1,
        ];

        $response = $this->postJson("/api/v1/orcamento",$orcamento_data);

        $response->assertStatus(422);
    }

    /**
     * Success create new web
     *
     * @return void
     */
    public function test_inserir_orcamento_web_endpoin_api_sucesso(): void
    {
        $orcamento_data = [
            'nome' => 'Felipe R Farias',
            'email' => 'feliperfariasdev@gmail.com',
            'endereco' => 'R. Francelizio Oliveira Coelho Filho, 149 - Praia do PartidoSão Sebastião - SP, 11606-160',
            'tipo_orcamento' => 'Web',
            'opcoes_escolhida' => 'Chrome;Safari;Firefox',
            'qtd_paginas' => '10',
            'autenticacao' => 1,
            'pagamento' => 1,
        ];

        $response = $this->postJson("/api/v1/orcamento",$orcamento_data);

        $response->assertStatus(201);
    }
}
