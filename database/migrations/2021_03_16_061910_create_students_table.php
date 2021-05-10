<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id('id');
            $table->string('studentID', 50)->unique()->required();
            $table->string('first_name', 50)->required();
            $table->string('last_name', 50)->required();
            $table->string('student_email')->unique()->nullable();
            $table->string('github_username')->unique()->nullable();
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
