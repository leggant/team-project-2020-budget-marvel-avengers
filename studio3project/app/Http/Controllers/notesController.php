<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class notesController extends Controller
{
    public function view () {
        return view ('Notes'); 
    }
}