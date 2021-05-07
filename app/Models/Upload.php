<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    use HasFactory;
    protected $table = 'uploads';
    protected $primaryKey = 'id';
    protected $dateFormat = 'd-m-Y H:i';
    protected $fillable = [
        'studentName', 
        'uploadURL', 
        'description'
    ];
}