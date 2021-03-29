<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Notes () {
        return view('pages.notes.Notes'); 
    }

    public function cohortpage(){
        return view('pages.cohort');
    }

    public function homepage(){
        return view('pages.index');
    }

    public function evidencePage() {
        return view('pages.evidence.evidence_upload');
    }
}