<?php

namespace Database\Seeders;

use App\Models\Orcamento;

use Illuminate\Database\Seeder;

class OrcamentoDesktopSeeder extends Seeder
{
    public function run(): void
    {
        $tipo_orcamento_desktop = [
            'nome' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'endereco' => fake()->address(),
            'tipo_orcamento' => 'Desktop',
            'opcoes_escolhida' => 'Windows;Linux;MacOS',
            'qtd_paginas' => fake()->randomNumber(),
            'autenticacao' => 1,
            'pagamento' => 1,
        ];
        Orcamento::factory(30)->create($tipo_orcamento_desktop);
    }
}
