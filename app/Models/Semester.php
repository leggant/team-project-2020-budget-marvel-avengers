<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    use HasFactory;
    protected $table = 'semesters';
    protected $primaryKey = 'id';
    protected $fillable = [
        'students',
        'cohort_id',
        'studio'
    ];

    public function cohort(){
        return $this->belongsTo(Cohort::class, 'cohort_id');
    }
}