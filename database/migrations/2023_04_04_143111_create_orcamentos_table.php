<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orcamentos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email');
            $table->string('endereco')->nullable();
            $table->enum('tipo_orcamento',['Web','Mobile','Desktop']);
            $table->string('opcoes_escolhida');
            $table->integer('qtd_paginas');
            $table->boolean('autenticacao')->default(true);
            $table->boolean('pagamento')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orcamentos');
    }
};
