<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(studentSeeder::class);
        $this->call(notesSeeder::class);
        $this->call(uploadSeeder::class);
        $this->call(cohortSeeder::class);    }
}
