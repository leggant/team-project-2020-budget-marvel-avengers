<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentScreen extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $primaryKey = 'id';
    protected $fillable = [
        'studentID',
        'first_name', 
        'last_name', 
        'student_username',
        'github_username', 
        'student_email',
        'cohort_id'
    ];
    protected $hidden = ['created_at', 'updated_at'];
}
