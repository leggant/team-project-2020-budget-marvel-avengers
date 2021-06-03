<?php

namespace App\Http\Controllers;

use App\Models\Cohort;
use App\Models\Semester;
use Illuminate\Http\Request;

class CohortController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $cohort = Cohort::all();
        $semesters = Cohort::with('semesters')->get();
        return view('pages/cohort.cohort')->with(compact('cohort', 'semesters'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Cohort::create($request->all());
        return redirect('cohort');
    }

    public function show(Semester $id)
    {
        $semester = Cohort::with('semesters')->find($id);
        return view('pages/cohort.cohort')->with(compact('semester'));
    }

    public function edit(Cohort $cohort)
    {
        return view('pages.cohort.cohort_edit', compact('cohort'));
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $cohorts = Cohort::query();
        if($cohorts->where('id', $id)->exists()){
            $cohort = $cohorts->find($id);
            $cohort->delete();
            return redirect('cohort');
        }
    }
}
