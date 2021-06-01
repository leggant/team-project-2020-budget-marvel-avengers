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
        'year',
        'semester'
    ];

    public function semesters(){
        return $this->hasMany(Semester::class);
    }
}
