<?php

namespace MasteringNova;

use Illuminate\Support\ServiceProvider;
use MasteringNova\Commands\Install;

class MasteringNovaServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->registerCommands();
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
}
