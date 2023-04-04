<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrcamentoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //return parent::toArray($request);
        return [
            'id' => $this->id,
            'nome' => $this->nome,
            'email' => $this->email,
            'endereco' => $this->endereco,
            'tipo_orcamento' => $this->tipo_orcamento,
            'opcoes_escolhida' => $this->opcoes_escolhida,
            'qtd_paginas' => $this->qtd_paginas,
            'autenticacao' => $this->autenticacao,
            'pagamento' => $this->pagamento,
            'data_criacao' => Carbon::parse($this->created_at)->format('d/m/Y')
        ];
    }
}
