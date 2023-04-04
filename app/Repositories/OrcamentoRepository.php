<?php

namespace App\Repositories;

use App\Models\Orcamento;

class OrcamentoRepository implements OrcamentoRepositoryInterface
{
    protected $orcamento;

    public function __construct(Orcamento $orcamento)
    {
        $this->orcamento = $orcamento;
    }

    public function created($data)
    {
        return $this->orcamento::created($data);
    }

    public function getAll()
    {
        return $this->orcamento->all();
    }
}
