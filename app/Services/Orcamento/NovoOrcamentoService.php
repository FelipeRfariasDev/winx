<?php

namespace App\Services\Orcamento;

use App\Repositories\Contracts\OrcamentoRepositoryInterface;

class NovoOrcamentoService
{
    protected $orcamentoRepository;

    public function __construct(OrcamentoRepositoryInterface $orcamentoRepository) {
        $this->orcamentoRepository = $orcamentoRepository;
    }

    public function execute($data):object
    {
        try {
            $novoOrcamento = $this->orcamentoRepository->store($data);
            return response()->json([
                "success" =>  true,
                "message" =>  'inserido com sucesso',
                "data" =>  $novoOrcamento,
            ],201);
        }catch (\Exception $exception){
            return response()->json([
                "success" =>  false,
                "message" =>  $exception->getMessage()
            ],422);
        }

    }
}
