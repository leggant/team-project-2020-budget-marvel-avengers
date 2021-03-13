<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function homepage(){
        return view('pages.index');
    }
    public function profile(){
        return view('pages.profile');
    }

}
