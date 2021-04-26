<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Note extends Model
{
    use HasFactory;

    protected $table = 'note';
    protected $primaryKey = 'id';
    protected $fillable = [
        'student_id', 
        'staff_id', 
        'group_id',  
        'note'
    ];
}