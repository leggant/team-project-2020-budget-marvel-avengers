<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentEvidence extends Model
{
    use HasFactory;
    protected $table = 'student_evidence';
    protected $primaryKey = 'evidence_id';
    protected $dateFormat = 'Y-m-d H:i';
    protected $fillable = ['student_id', 'staff_id', 'cohort_id', 'file_uploads', 'comments', 'urls', 'date_received', 'assignment_received', 'assignment_due', 'medical_certificate_supplied', 'medical_cert_start', 'medical_cert_end'];
    protected $casts = [
        'file_uploads' => 'array',
        'comments' => 'array',
        'urls' => 'array'
    ];
}