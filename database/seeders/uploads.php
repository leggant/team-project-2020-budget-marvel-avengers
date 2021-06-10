<?php

namespace Database\Seeders;

use App\Models\Upload;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class uploads extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json_file = File::get('database/data/uploads.json');
        DB::table('uploads')->delete();
        $data = json_decode($json_file);
        foreach ($data as $obj) {
            Upload::create(array(
                'uploadURL' => $obj->uploadURL,
                'description' => $obj->description,
                'student_id' => $obj->student_id,
            ));
        }
    }
}