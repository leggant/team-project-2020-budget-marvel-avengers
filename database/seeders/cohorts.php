<?php

namespace Database\Seeders;

use App\Models\Cohort;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class cohorts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json_file = File::get('database/data/cohort.json');
        DB::table('cohorts')->delete();
        $data = json_decode($json_file);
        foreach ($data as $obj) {
            Cohort::create(array(
                'name' => $obj->name,
                'paper' => $obj->paper,
                'semester' => $obj->semester,
                'year' => $obj->year,
                'student_id' => $obj->student_id,
            ));
        }
    }
}