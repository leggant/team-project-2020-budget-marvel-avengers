<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotesScreensTable extends Migration
{
    /**
     * @return void
     */

    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('staff_id');
            $table->unsignedBigInteger('group_id')->nullable(); //Include later if group model/migration created
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