<?php

namespace Database\Seeders;

use App\Models\Orcamento;

use Illuminate\Database\Seeder;

class OrcamentoWebSeeder extends Seeder
{
    public function run(): void
    {
        $tipo_orcamento_web = [
            'nome' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'endereco' => fake()->address(),
            'tipo_orcamento' => 'Web',
            'opcoes_escolhida' => 'Chrome;Safari;Firefox',
            'qtd_paginas' => fake()->randomNumber(),
            'autenticacao' => 1,
            'pagamento' => 1,
        ];
        Orcamento::factory(30)->create($tipo_orcamento_web);
    }
}
