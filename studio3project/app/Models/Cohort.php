<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cohort extends Model
{
    protected $table = 'cohort';

    protected $fillable = ['name', 'email', 'cohort'];
}
