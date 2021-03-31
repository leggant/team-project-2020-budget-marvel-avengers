<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentScreen extends Model
{
    use HasFactory;
    protected $table = 'student_screen';
    protected $primaryKey = 'student_id';
    protected $fillable = ['student_id', 'first_name', 'last_name', 'github_username', 'email','gender'];
    
}
