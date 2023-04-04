<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrcamentoRequest;
use App\Http\Resources\OrcamentoResource;
use App\Services\OrcamentoService;

class OrcamentoController extends Controller
{
    protected $orcamentoService;

    public function __construct(OrcamentoService $orcamentoService)
    {
        $this->orcamentoService = $orcamentoService;
    }

    public function created(StoreOrcamentoRequest $data)
    {
        try {
            $this->orcamentoService->created($data);
            return response()->json([
                "success" =>  true,
                "message" =>  'inserido com sucesso',
                "data" =>  $data->all()
            ],200);
        }catch (\Exception $exception){
            return response()->json([
                "success" =>  false,
                "message" =>  $exception->getMessage()
            ],422);
        }

    }

    public function getAll(){
        return OrcamentoResource::collection($this->orcamentoService->getAll());
    }
}
