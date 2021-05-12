<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function homepage() {
        return view('pages.index');
    }
    public function students() {
        return view('pages.students.students');
    }
}