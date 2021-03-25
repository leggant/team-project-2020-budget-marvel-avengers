<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    //this function will return the index page inside pages folder 
    public function homepage(){
        return view('pages.index');
    }
    public function evidencePage() {
        return view('pages.evidence.evidence_upload');
    }
}
