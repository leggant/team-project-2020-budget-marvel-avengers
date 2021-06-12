<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Note;
use App\Models\Upload;
use App\Models\Cohort;

class PagesController extends Controller
{
    /**
     * Show the application login.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $student = Student::count();
        $note = Note::count();
        $upload = Upload::count();
        $cohort = Cohort::count();
        return view('pages.index')->with(compact('student','note','upload','cohort'));
    }

    /**
     * Show the application register.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function register()
    {
        return view('auth.register')->middleware('auth');
    }
}