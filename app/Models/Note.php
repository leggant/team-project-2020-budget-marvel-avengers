<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Note extends Model
{
    use HasFactory;

    protected $table = 'notes';
    protected $primaryKey = 'student_id';
    protected $fillable = ['student_id', 'first_name', 'last_name', 'repo_url', 'notes', 'group_id', 'group_name'];
}