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
            $table->id();
            $table->string('first_name');
            $table->string('last_lame');
            $table->string('github_username')->unique();
            $table->string('student_email')->unique();
            $table->unsignedBigInteger('');
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
