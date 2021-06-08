<?php

namespace App\Http\Controllers;

use App\Models\Cohort;
use App\Models\Semester;
use Illuminate\Http\Request;

class SemesterController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Semester::create($request->all());
        return redirect('cohort');
    }

    public function show($id)
    {
        $cohort = Cohort::with('semesters')->find($id);
        return view('pages/cohort.semesters', ['cohort' => $cohort]);
    }

    public function edit(Semester $semester)
    {
        //
    }

    public function update(Request $request, Semester $semester)
    {
        //
    }

    public function destroy(Semester $semester)
    {
        //
    }
}
