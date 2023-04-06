<?php

namespace App\Actions\OrcamentoController;

use App\Http\Resources\OrcamentoResource;
use App\Repositories\Contracts\OrcamentoRepositoryInterface;

class ListarTodosOrcamentosAction
{
    public function __construct(OrcamentoRepositoryInterface $orcamentoRepository) {
        $this->orcamentoRepository = $orcamentoRepository;
    }

    public function execute():object
    {
        return OrcamentoResource::collection($this->orcamentoRepository->getAll());
    }
}
