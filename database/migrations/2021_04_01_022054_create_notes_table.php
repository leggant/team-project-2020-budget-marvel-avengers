<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotesTable extends Migration
{
    /**
     * @return void
     */

    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->id('id');
            $table->string('student_name');
            $table->text('note');
            $table->timestamps();
        });
    }

    /**
     * @return void
     */

    public function down()
    {
        Schema::dropIfExists('notes');
    }
}