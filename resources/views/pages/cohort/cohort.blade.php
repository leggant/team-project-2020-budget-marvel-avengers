<!-- Cohort screen-->
<!-- These lines pull the header from the partials-->
@extends('layouts.app')
@section('title')
    Studio Management Portal | Student Cohort
@endsection
<!-- Form begins-->
@section('content')
<section>
    <header>
        <h1>Cohort Assignment</h1>
    </header>
    <form id="cohort-form" action="#">
        <fieldset id="cohort-select">
            <legend id="cohortSelect">Select a Cohort</legend>
            <!-- <input id="Cohort1" name="cohortID" type="hidden" value="cohort1"> -->
            <input id="Cohort_1" name="cohortID" type="radio" value="First_Cohort" >
            <label class="choice" for="Cohort_1">Cohort 1</label>

            <input id="Cohort_2" name="cohortID" type="radio" value="Second Cohort" tabindex="6">
            <label class="choice" for="Cohort_2">Cohort 2</label>

            <input id="Cohort_3" name="cohortID" type="radio" value="Third Cohort" tabindex="7">
            <label class="choice" for="Cohort_3">Cohort 3</label>

        </fieldset>

        <label class="desc" id="title106" for="Field106">
            Select Students
        </label>

        <select id="Field106" name="Field106" class="field select medium" tabindex="11">
            <option value="First Choice">Joe Bloggs</option>
            <option value="Second Choice">Mary Jane</option>
            <option value="Third Choice">Donald Trump</option>
        </select>

        <label class="desc" id="title107" for="Field107">
            Select Paper
        </label>

        <select id="Field107" name="Field107" class="field select medium" tabindex="11">
            <option value="First Choice">Studio 1</option>
            <option value="Second Choice">Studtio 2</option>
            <option value="Third Choice">Studio 3</option>
            <option value="Fourth Choice">Studio 4</option>
            <option value="Fifth Choice">Studio 5</option>
        </select>

        <!--The intention here is to have a text box that shows who you have selected, in the same fashion as setting up a group on Facebook Messenger or Teams -->

        <label class="desc" id="title4" for="Field4">
            Selected Students
        </label>
        <textarea id="Field4" name="Field4" spellcheck="true" rows="10" cols="50" tabindex="4"></textarea>

        <div>
            <button class="submit-btn" type="submit">Submit</button>
        </div>
    </form>
</section>
@endsection
