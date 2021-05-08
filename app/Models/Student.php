<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';
    protected $primaryKey = 'id';
    protected $fillable = [
        'studentID',
        'first_name', 
        'last_name', 
        'github_username', 
        'student_email',
    ];
    protected $hidden = ['created_at', 'updated_at'];
}