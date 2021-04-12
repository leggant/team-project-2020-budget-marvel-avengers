<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\StudentEvidence;

class CreateStudentEvidenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentEvidence', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedInteger('studentId')->nullable(false)->unique();
            $table->unsignedInteger('staffId')->nullable(false)->unique();
            $table->unsignedInteger('cohortId')->nullable(false)->unique();
            // laravel cannot create arrays natively, the recommended 
            // workaround is to use json in the migration
            // in the model this json is cast to an array which is used in/by the
            // database 
            $table->json('fileUploads')->nullable(true);
            $table->json('comments');
            $table->json('urls')->nullable(true);
            $table->datetime('dateReceived')->format('d.m.y h.m');
            $table->datetime('assignmentReceived')->format('d.m.y h.m')->nullable(true);
            $table->datetime('assignmentDue')->format('d.m.y h.m')->nullable(true);
            $table->boolean('medicalCertificateSupplied')->default(false);
            $table->date('medicalCertStart')->format('d.m.y')->nullable(true);
            $table->date('medicalCertEnd')->format('d.m.y')->nullable(true);
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
        Schema::dropIfExists('student_evidence');
    }
}
