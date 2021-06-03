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

    public function edit(Semester $id)
    {
        return view('pages.cohort.cohort_edit');

    }

    public function update(Request $request, Semester $id)
    {
        $semesters = Semester::query();
        if ($semesters->where('id', $id)->exists()) {
            $semester = $semesters->find($id);
            $semester->students = is_null($request->students) ? $semester->students : $request->students;
            $semester->studio = is_null($request->studio) ? $semester->studio : $request->studio;
            $semester->cohort_id = is_null($request->cohort_id) ? $semester->cohort_id : $request->cohort_id;
            $semester->save();
        }
    }

    public function destroy($id)
    {
        $semesters = Semester::query();
        if($semesters->where('id', $id)->exists()){
            $semester= $semesters->find($id);
            $semester->delete();
            return redirect('cohort');
        }
    }
}
