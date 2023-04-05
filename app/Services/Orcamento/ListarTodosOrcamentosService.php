<?php

namespace App\Services\Orcamento;

use App\Http\Resources\OrcamentoResource;
use App\Repositories\OrcamentoRepository;

class ListarTodosOrcamentosService
{
    protected $orcamentoRepository;

    public function __construct(OrcamentoRepository $orcamentoRepository) {
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
