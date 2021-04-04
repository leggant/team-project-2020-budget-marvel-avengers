<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentScreensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_screens', function (Blueprint $table) {
            $table->bigIncrements('studioID');
            $table->string('student_id')->unique();
            $table->string('first_name',100);
            $table->string('last_name',100);
            $table->string('github_username',100)->unique();
            $table->string('student_email',100)->unique();
            $table->timestamp('added_on');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_screens');
    }
}
