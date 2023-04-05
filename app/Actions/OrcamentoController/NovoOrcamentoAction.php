<?php

namespace App\Actions\OrcamentoController;

use App\Mail\EnviarEmailEmpresaOrcamento;
use App\Mail\EnviarOrcamentoCliente;
use App\Mail\EnviarOrcamentoEmpresa;
use App\Repositories\Contracts\OrcamentoRepositoryInterface;
use Illuminate\Support\Facades\Mail;

class NovoOrcamentoAction
{
    public function __construct(OrcamentoRepositoryInterface $orcamentoRepository) {
        $this->orcamentoRepository = $orcamentoRepository;
    }

    public function execute($data):object
    {
        try {
            $novoOrcamento = (array) json_decode($this->orcamentoRepository->store($data));

            Mail::to(env('MAIL_ORCAMENTO','feliperfariasdev@gmail.com'),env('NAME_ORCAMENTO','Felipe R Farias'))->send(new EnviarOrcamentoEmpresa($novoOrcamento));
            Mail::to($novoOrcamento['email'],$novoOrcamento['nome'])->send(new EnviarOrcamentoCliente($novoOrcamento));

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
