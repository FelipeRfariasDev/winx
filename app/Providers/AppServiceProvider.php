<?php

namespace App\Providers;

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
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
