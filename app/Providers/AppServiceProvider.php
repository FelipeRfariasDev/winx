<?php

namespace App\Providers;

use App\Repositories\OrcamentoRepository;
use App\Repositories\OrcamentoRepositoryInterface;
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
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
