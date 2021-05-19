<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cohort extends Model
{
    use HasFactory;

    protected $table = 'cohorts';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'paper', 
        'cohort',
        'student_id'
    ];
    public function students(){
        return $this->belongsTo(Student::class, 'student_id');
    }
}
