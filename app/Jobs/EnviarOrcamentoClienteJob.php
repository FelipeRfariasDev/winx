<?php

namespace App\Jobs;

use App\Mail\EnviarOrcamentoCliente;
use App\Models\Orcamento;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class EnviarOrcamentoClienteJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(Orcamento $orcamento)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(EnviarOrcamentoCliente $enviarOrcamentoCliente): void
    {
        // enviar email para o cliente
    }
}
