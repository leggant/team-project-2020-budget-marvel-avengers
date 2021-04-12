<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentEvidence extends Model
{
    use HasFactory;
    protected $table = 'studentEvidence';
    protected $primaryKey = 'id';
    protected $dateFormat = 'Y-m-d H:i';
    protected $fillable = [
        'studentId', 
        'staffId', 
        'cohortId', 
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
        'urls' => 'array'
    ];
}