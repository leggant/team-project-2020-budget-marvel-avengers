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
        Schema::create('uploads', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedInteger('student_id');
            $table->unsignedInteger('staff_id');
            $table->unsignedInteger('cohort_id');
            $table->json('fileUploads')->nullable();
            $table->json('comments');
            $table->json('urls')->nullable();
            $table->datetime('dateReceived')->format('d.m.y h.m');
            $table->datetime('assignmentReceived')->nullable()->format('d.m.y h.m');
            $table->datetime('assignmentDue')->nullable()->format('d.m.y h.m');
            $table->boolean('medicalCertificateSupplied')->default(false);
            $table->date('medicalCertStart')->nullable()->format('d.m.y');
            $table->date('medicalCertEnd')->nullable()->format('d.m.y');
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
