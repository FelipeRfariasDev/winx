<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orcamento extends Model
{
    use HasFactory;
    protected $fillable = array('id','nome', 'email', 'endereco','tipo_orcamento','opcoes_escolhida','qtd_paginas','autenticacao','pagamento');
}
