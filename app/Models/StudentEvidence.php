<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentEvidence extends Model
{
    use HasFactory;
    protected $table = 'student_evidence';
    protected $primaryKey = 'evidence_id';
    protected $fillable = ['student_id', 'staff_id', 'cohort_id', 'file_uploads', 'comments'];
    protected $casts = [
        'file_uploads' => 'array',
        'comments' => 'array'
    ];
}