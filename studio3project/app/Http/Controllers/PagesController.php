<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use  App\Models\Cohort;

class pagesController extends Controller
{
    public function cohortpage(){
    return view('pages.cohort');
    }
}