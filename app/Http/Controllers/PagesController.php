<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function homepage(){
        return view('pages.index');
    }

    public function notes () {
        return view('pages.notes.notes'); 
    }

    // public function cohortpage(){
    //     return view('pages.cohort.cohort');
    // }

    // public function cohortview(){
    //     return view('pages.cohort.cohort_select');
    // }

    // public function evidencePage() {
    //     return view('pages.evidence.evidence_upload');
    // }

    public function students() {
        return view('pages.students.students');
    }
}