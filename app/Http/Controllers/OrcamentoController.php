<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrcamentoRequest;
use App\Services\Orcamento\ListarTodosOrcamentosService;
use App\Services\Orcamento\NovoOrcamentoService;

class OrcamentoController extends Controller
{
    public function __construct(NovoOrcamentoService $novoOrcamentoService, ListarTodosOrcamentosService $listarTodosOrcamentosService)
    {
        $this->novoOrcamentoService = $novoOrcamentoService;
        $this->listarTodosOrcamentosService = $listarTodosOrcamentosService;
    }

    public function store(StoreOrcamentoRequest $data):object
    {
        return $this->novoOrcamentoService->execute($data->all());
    }

    public function getAll():object
    {
        return $this->listarTodosOrcamentosService->execute();
    }
}
