<?php

namespace Database\Seeders;

use App\Models\Note;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class notes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json_file = File::get('database/data/note.json');
        DB::table('notes')->delete();
        $data = json_decode($json_file);
        foreach ($data as $obj) {
            Note::create(array(
                'student_name' => $obj->student_name,
                'note' => $obj->note,
                'student_id' => $obj->student_id,
            ));
        }
    }
}