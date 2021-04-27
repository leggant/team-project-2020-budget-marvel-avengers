<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uploads', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedInteger('student_id')->unique();  // foreign key
            $table->unsignedInteger('staff_id')->unique(); // foreign key
            $table->unsignedInteger('cohort_id')->unique(); // foreign key
            // laravel cannot create arrays natively, the recommended 
            // workaround is to use json in the migration
            // in the model this json is cast to an array which is used in/by the
            // database 
            $table->json('fileUploads')->nullable();
            $table->json('comments');
            $table->json('urls')->nullable();
            $table->datetime('dateReceived')->format('d.m.y h.m');
            $table->datetime('assignmentReceived')->format('d.m.y h.m')->nullable();
            $table->datetime('assignmentDue')->format('d.m.y h.m')->nullable();
            $table->boolean('medicalCertificateSupplied')->default(false);
            $table->date('medicalCertStart')->format('d.m.y')->nullable();
            $table->date('medicalCertEnd')->format('d.m.y')->nullable();
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
        Schema::dropIfExists('uploads');
    }
}
