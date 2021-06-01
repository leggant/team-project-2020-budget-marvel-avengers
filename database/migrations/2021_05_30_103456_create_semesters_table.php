<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSemestersTable extends Migration
{
   
    public function up()
    {
        Schema::create('semesters', function (Blueprint $table) {
            $table->id();
            $table->longText('students');
            $table->string('studio');
            $table->unsignedBigInteger('cohort_id');
            $table->foreign('cohort_id')->references('id')->on('cohorts');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('semesters');
    }
}
