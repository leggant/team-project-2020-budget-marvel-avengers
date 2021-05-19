<?php

namespace Database\Seeders;

use App\Models\Upload;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json_file = File::get('database/data/upload.json');
        DB::table('students')->delete();
        $data = json_decode($json_file);
        foreach ($data as $obj) {
            Upload::create(array(
                'studentName' => $obj->studentName,
                'uploadURL' => $obj->uploadURL,
                'description' => $obj->description,
                'student_id' => $obj->student_id,
            ));
        }
    }
}