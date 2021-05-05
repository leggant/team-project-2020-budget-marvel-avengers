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
            $table->string('studentID', 50)->unique();
            $table->string('student_username', 50)->unique();
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('student_email')->unique();
            $table->string('github_username')->unique();
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
