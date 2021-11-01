<?php

namespace MasteringNova;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use MasteringNova\Commands\Install;

class MasteringNovaServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->registerCommands();
        $this->publishResources();
        $this->loadRoutes();
    }

    public function register()
    {
        //
    }

    protected function registerCommands(): void
    {
        $this->commands([
            Install::class,
        ]);
    }

    protected function publishResources()
    {
        $this->publishes([
            __DIR__.'/../resources/overrides/' => base_path('/'),
        ], 'mastering-nova-overrides');
    }

    protected function loadRoutes()
    {
        Route::middleware(['web'])
             ->group(function () {

                //common routes file.
                 include __DIR__.'/../routes/default.php';

                 /**
                  * For debug/development purposes eduka will load the
                  * respective environment route file if it exists.
                  */
                 $envRoutesFile = __DIR__.
                              '/../routes/'.
                              env('APP_ENV').
                              '.php';
                 if (file_exists($envRoutesFile)) {
                     include $envRoutesFile;
                 }
             });
    }
}
