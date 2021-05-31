<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCohortsTable extends Migration
{
    
    public function up()
    {
        Schema::create('cohorts', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->string('year');
            $table->string('semester');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('cohorts');
    }
}
