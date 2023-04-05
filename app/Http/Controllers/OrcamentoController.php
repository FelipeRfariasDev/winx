<?php

namespace App\Http\Controllers;


use App\Actions\OrcamentoController\ListarTodosOrcamentosAction;
use App\Actions\OrcamentoController\NovoOrcamentoAction;
use App\Http\Requests\StoreOrcamentoRequest;


class OrcamentoController extends Controller
{
    public function __construct(NovoOrcamentoAction $novoOrcamentoAction, ListarTodosOrcamentosAction $listarTodosOrcamentosAction)
    {
        $this->novoOrcamentoAction = $novoOrcamentoAction;
        $this->listarTodosOrcamentosActions = $listarTodosOrcamentosAction;
    }

    public function store(StoreOrcamentoRequest $data):object
    {
        return $this->novoOrcamentoAction->execute($data->all());
    }

    public function getAll():object
    {
        return $this->listarTodosOrcamentosActions->execute();
    }
}
