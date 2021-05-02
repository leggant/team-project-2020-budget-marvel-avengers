<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\StudentEvidence;

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
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('staff_id');
            $table->unsignedBigInteger('cohort_id');
            $table->string('uploadURL');
            $table->json('comments');
            $table->json('urls')->nullable();
            $table->datetime('dateReceived')->format('d.m.Y h.m');
            $table->datetime('assignmentReceived')->nullable()->format('d.m.Y h.m');
            $table->datetime('assignmentDue')->nullable()->format('d.m.Y h.m');
            $table->boolean('medicalCertificateSupplied')->default(false);
            $table->date('medicalCertStart')->nullable()->format('d.m.Y');
            $table->date('medicalCertEnd')->nullable()->format('d.m.Y');
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
