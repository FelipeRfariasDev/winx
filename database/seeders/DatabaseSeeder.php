<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            OrcamentoDesktopSeeder::class,
            OrcamentoMobileSeeder::class,
            OrcamentoWebSeeder::class,
        ]);
    }
}
