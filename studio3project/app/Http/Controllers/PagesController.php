<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use  App\Models\Cohort;

class PagesController extends Controller
{
    public function cohortpage(){
    return view('cohort');
    }
}