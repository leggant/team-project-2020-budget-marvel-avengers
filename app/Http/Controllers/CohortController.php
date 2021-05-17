<?php

namespace App\Http\Controllers;

use App\Models\Cohort;
use Illuminate\Http\Request;

class CohortController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cohort = Cohort::all();
        return view('pages.cohort.cohort',['cohort' => $cohort]);
    }
       /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('pages.cohort.cohort_select');
    }
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'paper' => 'required',
            'cohort' => 'required'
        ]);

        Cohort::create($request->all());
        return redirect('cohorts');
        //     // ->with('success','Cohort successfully created');
        // ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cohort  $cohort
     * @return \Illuminate\Http\Response
     */
    public function show(Cohort $cohort)
    {
        //return view('pages.cohort.cohort_select')
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cohort  $cohort
     * @return \Illuminate\Http\Response
     */
    public function edit(Cohort $cohort)
    {
        //
    }
     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cohort  $cohort
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cohort $cohort)
    {
        $request->validate([
            'name' => 'required',
            'paper' => 'required',
            'cohort' => 'required'
        ]);

        $cohort->update($request->all());

        return redirect()->route('cohorts')
            ->with('success', 'Cohort updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cohort  $cohort
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cohort $cohort)
    {
        //
    }
}
