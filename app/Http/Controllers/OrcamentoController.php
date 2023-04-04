<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrcamentoRequest;

class OrcamentoController extends Controller
{

    public function store(StoreOrcamentoRequest $request)
    {
        try {
            return response()->json([
                "success" =>  true,
                "data" =>  $request->all()
            ],200);
        }catch (\Exception $exception){
            return response()->json([
                "success" =>  false,
                "message" =>  $exception->getMessage()
            ],422);
        }

    }
}
