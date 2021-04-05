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
        Schema::create('student_evidence', function (Blueprint $table) {
            $table->bigIncrements('evidence_id');
            $table->unsignedInteger('student_id')->nullable(false)->unique();
            $table->unsignedInteger('staff_id')->nullable(false)->unique();
            $table->unsignedInteger('cohort_id')->nullable(false)->unique();
            // laravel cannot create arrays natively, the recommended 
            // workaround is to use json in the migration
            // in the model this json is cast to an array which is used in/by the
            // database 
            $table->json('file_uploads')->nullable(true);
            $table->json('comments');
            $table->json('urls')->nullable(true);
            $table->datetime('date_received')->format('d.m.y h.m');
            $table->datetime('assignment_received')->format('d.m.y h.m')->nullable(true);
            $table->datetime('assignment_due')->format('d.m.y h.m')->nullable(true);
            $table->boolean('medical_certificate_supplied')->default(false);
            $table->date('medical_cert_start')->format('d.m.y')->nullable(true);
            $table->date('medical_cert_end')->format('d.m.y')->nullable(true);
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
