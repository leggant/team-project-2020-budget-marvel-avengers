<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    use HasFactory;
    protected $table = 'upload';
    protected $primaryKey = 'id';
    protected $dateFormat = 'Y-m-d H:i';
    protected $fillable = [
        'student_id', 
        'staff_id', 
        'cohort_id', 
        'fileUploads', 
        'comments', 
        'urls', 
        'dateReceived', 
        'assignmentReceived', 
        'assignmentDue', 
        'medicalCertificateSupplied', 
        'medicalCertStart', 
        'medicalCertEnd'
    ];
    protected $casts = [
        'file_uploads' => 'array',
        'comments' => 'array',
        'urls' => 'array',
        'medicalCertificateSupplied' => 'boolean',
        'assignmentReceived' => 'boolean'
    ];
}