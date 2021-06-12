<?php

namespace Database\Seeders;

use App\Models\Semester;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class semesters extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json_file = File::get('database/data/semesters.json');
        DB::table('semesters')->delete();
        $data = json_decode($json_file);
        foreach ($data as $obj) {
            Semester::create(array(
                'students' => $obj->students,
                'cohort_id' => $obj->cohort_id,
                'studio' => $obj->studio,
            ));
        }
    }
}