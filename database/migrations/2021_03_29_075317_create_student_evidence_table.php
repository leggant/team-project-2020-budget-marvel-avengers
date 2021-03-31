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
            
            // shorthand way of adding foreign key, only works if a table 
            // migration exists-which cohorts currently does. Will uncomment this when
            // the foreign keys exist in other table/migrations
            // $table->foreignId('student_id')->constrained('students');  
            // $table->foreignId('staff_id')->constrained('staff');  
            // $table->foreignId('cohort_id')->constrained('cohorts');  
            
            // laravel cannot create arrays natively, the recommended 
            // workaround is to use json in the migration
            // in the model this json is cast to an array which is used in/by the
            // database 
            $table->json('file_uploads');
            $table->json('comments');
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
