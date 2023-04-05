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
        try {
            return response()->json([
                "Orcamentos" =>  OrcamentoResource::collection($this->orcamentoRepository->getAll()),
            ],200);
        }catch (\Exception $exception){
            return response()->json([
                "success" =>  false,
                "message" =>  $exception->getMessage()
            ],422);
        }
    }
}
