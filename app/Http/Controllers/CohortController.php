<?php

namespace App\Http\Controllers;

use App\Models\Cohort;
use Illuminate\Http\Request;

class CohortController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
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
