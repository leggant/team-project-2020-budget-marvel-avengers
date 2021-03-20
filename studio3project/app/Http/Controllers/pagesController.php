<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    //this function will return the index page inside pages folder 
    public function homepage(){
        return view('pages.index');
    }
    public function students(){
        return view('pages.students');
    }
    public function evidence(){
        return view('pages.evidence');
    }
    public function notes(){
        return view('pages.notes');
    }
 
    public function About(){
        return view('pages.about');
    }

}
