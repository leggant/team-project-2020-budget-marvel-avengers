<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class students extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json_file = File::get('database/data/student.json');
        DB::table('students')->delete();
        $data = json_decode($json_file);
        foreach ($data as $obj) {
            Student::create(array(
                'studentID' => $obj->studentID,
                'first_name' => $obj->first_name,
                'last_name' => $obj->last_name,
                'github_username' => $obj->github_username,
                'student_email' => $obj->student_email,
            ));
        }
    }
}