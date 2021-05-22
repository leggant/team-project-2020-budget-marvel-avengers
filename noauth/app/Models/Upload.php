<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    use HasFactory;
    protected $table = 'uploads';
    protected $primaryKey = 'id';
    protected $fillable = [
        'studentName', 
        'uploadURL', 
        'description',
        'student_id'
    ];

    public function students(){
        return $this->belongsTo(Student::class, 'student_id');
    }
}