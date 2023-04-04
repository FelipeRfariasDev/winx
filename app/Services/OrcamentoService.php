<?php

namespace App\Services;


use App\Repositories\OrcamentoRepositoryInterface;

class OrcamentoService
{
    protected $orcamentoRepository;

    public function __construct(OrcamentoRepositoryInterface $orcamentoRepository) {
        $this->orcamentoRepository = $orcamentoRepository;
    }

    public function created($data)
    {
        $orcamento = $this->orcamentoRepository->created($data);

        return $orcamento;
    }

    public function getAll()
    {
        $orcamento = $this->orcamentoRepository->getAll();

        return $orcamento;
    }
}
