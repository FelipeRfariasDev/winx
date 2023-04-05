<?php

namespace App\Repositories;

use App\Models\Orcamento;
use App\Repositories\Contracts\OrcamentoRepositoryInterface;

class OrcamentoRepository implements OrcamentoRepositoryInterface
{
    public function __construct(Orcamento $orcamento)
    {
        $this->orcamento = $orcamento;
    }

    public function store($data):object
    {
        return $this->orcamento->create($data);
    }

    public function getAll():object
    {
        return $this->orcamento::all();
    }
}
