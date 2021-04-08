<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NotesScreen extends Model
{
    use HasFactory;

    protected $table = 'notes_screen';
    protected $primaryKey = 'student_id';
    protected $fillable = ['student_id', 'first_name', 'last_name', 'repo_url', 'notes', 'group_id', 'group_name'];
}