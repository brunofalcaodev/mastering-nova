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

        $this->migrate();

        return Command::SUCCESS;
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
