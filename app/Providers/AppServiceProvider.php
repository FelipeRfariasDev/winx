<?php

namespace App\Providers;

use App\Jobs\EnviarOrcamentoClienteJob;
use App\Mail\EnviarOrcamentoCliente;
use App\Mail\EnviarOrcamentoEmpresa;
use App\Repositories\Contracts\OrcamentoRepositoryInterface;
use App\Repositories\OrcamentoRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            OrcamentoRepositoryInterface::class,
            OrcamentoRepository::class
        );

        $this->app->bindMethod([EnviarOrcamentoEmpresaJob::class, 'handle'], function (EnviarOrcamentoEmpresaJob $job, Application $app) {
            return $job->handle($app->make(EnviarOrcamentoEmpresa::class));
        });
        $this->app->bindMethod([EnviarOrcamentoClienteJob::class, 'handle'], function (EnviarOrcamentoClienteJob $job, Application $app) {
            return $job->handle($app->make(EnviarOrcamentoCliente::class));
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
