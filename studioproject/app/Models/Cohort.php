<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cohort extends Model
{
    use HasFactory;

    protected $table = 'cohorts';
    // Cohorts are made of one of six studio papers
    // Year and semester
    protected $fillable = ['cohortId', 'name', 'email', 'cohort', 'studentId'];
}
