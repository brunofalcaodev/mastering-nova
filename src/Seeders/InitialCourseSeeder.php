<?php

namespace MasteringNova\Seeders;

use Eduka\Models\Course;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class InitialCourseSeeder extends Seeder
{
    public function run()
    {
        // Fresh the database.
        Artisan::call('migrate:fresh');

        // Create the course.
        Course::create([
            'name' => 'Mastering Nova',
            'canonical' => 'mastering-nova'
        ]);
    }
}
