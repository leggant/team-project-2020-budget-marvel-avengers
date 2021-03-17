<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use  App\Models\Cohort;

class CohortController extends Controller
{
    
    public function cohortpage(){
    return view('cohort');
}
    public function createCohort(Request $request) {
        
    }

    public function updateCohort(Request $request, $id) {
    }

    public function deleteCohort($id) {
    }

    public function getAllCohorts() {
    }
    
    public function getCohort($id) {
    }
}
