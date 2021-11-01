<?php

namespace MasteringNova\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use MasteringNova\Seeders\InitialCourseSeeder;

class Install extends Command
{
    protected $signature = 'mastering-nova:install';

    protected $description = 'Installs Mastering Nova course';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $this->info("
  __  __         _           _             _  _
 |  \/  |__ _ __| |_ ___ _ _(_)_ _  __ _  | \| |_____ ____ _
 | |\/| / _` (_-|  _/ -_| '_| | ' \/ _` | | .` / _ \ V / _` |
 |_|  |_\__,_/__/\__\___|_| |_|_||_\__, | |_|\_\___/\_/\__,_|
                                   |___/
                                   ");

        $this->paragraph('-= Mastering Nova installation starting =-', false);

        $this->publishResources();

        $this->migrate();

        return Command::SUCCESS;
    }

    protected function preChecks()
    {
        $this->paragraph('Running pre-checks...', false);

        /**
         * Quick ENV key/values validation.
         * key name => type
         * type can be:
         *   null (should exist, any value allowed)
         *   a value (equal to that value).
         */
        $envVars = collect([
            'QUEUE_CONNECTION' => 'redis',
            'CACHE_DRIVER' => 'redis',
            'MAIL_MAILER' => 'postmark',
        ]);

        $envVars->each(function ($value, $key) {
            if (is_null(env($key))) {
                $this->error('.env '.$key.' cannot be null / must exist');
                exit();
            } elseif (env($key) != $value && ! is_null($value)) {
                $this->error('.env '.$key.' should be equal to '.$value);
                exit();
            }
        });

        if (is_file(app_path('app/Providers/NovaServiceProvider.php'))) {
            return $this->error('Please install Laravel Nova before running Eduka');
        }

        $providers = collect(config('app.providers'));

        if (! $providers->contains('App\Providers\NovaServiceProvider')) {
            return $this->error('Laravel Nova Service provider is not loaded into the app.php config file');
        }

        return true;
    }

    protected function publishResources()
    {
        $this->paragraph('=> Publishing course resources...', false);

        $this->call('vendor:publish', [
            '--provider' => 'MasteringNova\MasteringNovaServiceProvider',
            '--force' => true,
        ]);
    }

    protected function migrate()
    {
        $this->paragraph('=> Running initial migration...', false);

        // Call initial schema activation
        Artisan::call('db:seed', [
            '--class' => InitialCourseSeeder::class,
            '--force' => true,
        ]);
    }

    private function paragraph($text, $endlf = true, $startlf = true)
    {
        if ($startlf) {
            $this->info('');
        }
        $this->info($text);
        if ($endlf) {
            $this->info('');
        }
    }
}
