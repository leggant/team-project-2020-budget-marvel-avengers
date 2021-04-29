<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCohortTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     //create cohort
    public function up()
    {
        Schema::create('cohort', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->string('paper');
            $table->string('semester');
            $table->string('year');
            $table->unsignedBigInteger('student_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cohorts');
    }
}
