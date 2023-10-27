<?php

namespace App\Providers;

use App\Models\TipoContrato;
use App\Models\Vaga;
use App\Repositories\TipoContratoRepository;
use App\Repositories\VagaRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(VagaRepository::class, function($app) {
            return new VagaRepository(new Vaga());
        });

        $this->app->bind(TipoContratoRepository::class, function($app) {
            return new TipoContratoRepository(new TipoContrato());
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
