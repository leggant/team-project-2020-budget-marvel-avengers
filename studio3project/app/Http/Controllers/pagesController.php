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
}
