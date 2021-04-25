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
            $table->integer('student_id')->unique();
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('repo_url')->unique();
            $table->string('notes');
            $table->string('group_id')->unique();
            $table->string('group_name');
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