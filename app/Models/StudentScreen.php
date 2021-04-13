<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentScreen extends Model
{
    use HasFactory;
    protected $table = 'student_screens';
    protected $fillable = ['first_name', 'last_ame', 'github_username', 'student_email'];
    protected $hidden = ['created_at', 'updated_at'];
}
