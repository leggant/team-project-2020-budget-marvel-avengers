<!-- Cohort screen-->
<!-- These lines pull the header from the partials-->
@extends('layouts.app')
@section('title')
    Studio Management Portal | Cohort
@endsection
<!-- Form begins-->
@section('content')
<section>
    <header>
        <h1>Cohort Assignment</h1>
    </header>
    <form id="cohort-form" action="{{ route('cohorts.store')}}" method='POST'>
        @csrf
        <fieldset id="cohort-select">
            <select id="cohort" name="cohort" class="field select medium" tabindex="5">
                <option value="Sem 1 '19">Started Sem 1 '19</option>
                <option value="Sem 2 '19">Started Sem 2 '19</option>
                <option value="Sem 1 '20">Started Sem 1 '20</option>
                <option value="Sem 2 '20">Started Sem 2 '20</option>
                <option value="Sem 1 '21">Started Sem 1 '21</option>
                <option value="Sem 2 '21">Started Sem 2 '21</option>
            </select>
            <legend id="cohortSelect">Select a Cohort</legend>
            <!-- <input id="Cohort1" name="cohortID" type="hidden" value="cohort1"> -->
            <input id="Cohort_1" name="cohortID" type="radio" value="First_Cohort" >
            <label class="choice" for="Cohort_1">Cohort 1</label>

            <input id="Cohort_2" name="cohortID" type="radio" value="Second Cohort" tabindex="6">
            <label class="choice" for="Cohort_2">Cohort 2</label>

            <input id="Cohort_3" name="cohortID" type="radio" value="Third Cohort" tabindex="7">
            <label class="choice" for="Cohort_3">Cohort 3</label>

        </fieldset>

        <label class="desc" id="paper" for="paper">
            Select Paper
        </label>

        <select id="paper" name="paper" class="field select medium" tabindex="11">
            <option value="Studio 1">Studio 1</option>
            <option value="Studio 2">Studio 2</option>
            <option value="Studio 3">Studio 3</option>
            <option value="Studio 4">Studio 4</option>
            <option value="Studio 5">Studio 5</option>
            <option value="Studio 6">Studio 6</option>
        </select>

        <label class="desc" id="title106" for="name">
            Student Name:
        </label>

        <textarea id="name" name="name" class="field select medium" tabindex="11"></textarea>

        <div>
            <button class="submit-btn" type="submit">Submit</button>
        </div>
    </form>
        <table class="cohort-table">
            <thead>
                <tr class="c-header-row">
                <th scope="col">Name</th>
                <th scope="col">Paper</th>
                <th scope="col">Cohort</th>
                </tr>
            </thead>

            
            <tbody>
                @foreach ($cohort as $cohorts)
                    <tr class="c-row">
                        <td>{{ $cohorts->name }}</td>
                        <td>{{ $cohorts->paper }}</td>
                        <td>{{ $cohorts->cohort }}</td>
                    </tr>
                    </tr>
                @endforeach
            </tbody>
        </table>
   
</section>
@endsection
