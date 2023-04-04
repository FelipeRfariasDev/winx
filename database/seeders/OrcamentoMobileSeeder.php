<?php

namespace Database\Seeders;

use App\Models\Orcamento;

use Illuminate\Database\Seeder;

class OrcamentoMobileSeeder extends Seeder
{
    public function run(): void
    {
        $tipo_orcamento_mobile_ios = [
            'nome' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'endereco' => fake()->address(),
            'tipo_orcamento' => 'Mobile',
            'opcoes_escolhida' => 'IOS',
            'qtd_paginas' => fake()->randomNumber(),
            'autenticacao' => 1,
            'pagamento' => 1,
        ];
        Orcamento::factory(30)->create($tipo_orcamento_mobile_ios);

        $tipo_orcamento_mobile_android = [
            'nome' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'endereco' => fake()->address(),
            'tipo_orcamento' => 'Mobile',
            'opcoes_escolhida' => 'Android',
            'qtd_paginas' => fake()->randomNumber(),
            'autenticacao' => 1,
            'pagamento' => 1,
        ];
        Orcamento::factory(30)->create($tipo_orcamento_mobile_android);

        $tipo_orcamento_mobile_ambos = [
            'nome' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'endereco' => fake()->address(),
            'tipo_orcamento' => 'Mobile',
            'opcoes_escolhida' => 'Ambos',
            'qtd_paginas' => fake()->randomNumber(),
            'autenticacao' => 1,
            'pagamento' => 1,
        ];
        Orcamento::factory(30)->create($tipo_orcamento_mobile_ambos);

    }
}
