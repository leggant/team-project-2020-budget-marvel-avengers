<!-- Cohort screen-->
<!-- These lines pull the header from the partials-->
@extends('layouts.app')
@section('title')
    <!-- Inserts Page Title On the Web browser tab -->
    Studio Management Portal | Student Cohort
@endsection
<!-- Form begins-->
@section('content')
<section>
    <header>
        <h1>Cohort Assignment</h1>
        <h4>Assign students into cohorts using the form.</h4>
    </header>
    <form id="cohort-form" action="#">
        <fieldset id="cohort-select">
            <legend id="cohortSelect">Select a Cohort</legend>
            <!-- <input id="Cohort1" name="cohortID" type="hidden" value="cohort1"> -->
            <input id="Field5_0" name="cohortID" type="radio" value="cohort2" checked="checked">
            <label class="choice" for="Field5_0">Cohort 1</label>

            <input id="Field5_1" name="Field5" type="radio" value="Second Cohort" tabindex="6">
            <label class="choice" for="Field5_1">Cohort 2</label>

            <input id="Field5_2" name="Field5" type="radio" value="Third Cohort" tabindex="7">
            <label class="choice" for="Field5_2">Cohort 3</label>

        </fieldset>

        <label class="desc" id="title106" for="Field106">
            Select Students
        </label>

        <select id="Field106" name="Field106" class="field select medium" tabindex="11">
            <option value="First Choice">Joe Bloggs</option>
            <option value="Second Choice">Mary Jane</option>
            <option value="Third Choice">Donald Trump</option>
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
