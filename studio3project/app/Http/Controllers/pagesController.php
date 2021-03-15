<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    //this function will return the index page inside pages folder 
    public function homepage(){
        return view('pages.index');
    }
      //this function will return the profile page inside pages folder 
    public function profile(){
        return view('pages.profile');
    }
    public function Notes(){
        return view('pages.Notes');
    }
    public function Students(){
        return view('pages.Students');
    }
    public function Login(){
        return view('pages.Login');
    }
    public function About(){
        return view('pages.About');
    }
}
