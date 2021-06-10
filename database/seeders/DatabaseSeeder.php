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
        $this->call(students::class);
        $this->call(notes::class);
        $this->call(uploads::class);
        $this->call(cohorts::class); 
        $this->call(semesters::class); 
       }
}
