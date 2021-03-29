<!-- Cohort screen-->

<!-- These lines pull the header from the partials-->
@extends('layouts.app')

@section('title')
Studio Management Portal | Cohort Management
@endsection

<!-- From begins-->
@section('content')
    
<form action="#">
  <div>
    <header>
      <h2>Cohort Assignment</h2>
      <div>Assign students into cohorts using the form.</div>
    </header>
  </div>   
    <div>
      <fieldset>
      
        <legend id="title5" class="desc">
          Select a Cohort
        </legend>
        
        <div>
            <input id="radioDefault_5" name="Field5" type="hidden" value="">
            <div>
                <input id="Field5_0" name="Field5" type="radio" value="First Choice" tabindex="5" checked="checked">
                <label class="choice" for="Field5_0">Cohort 1</label>
            </div>
          <div>
              <input id="Field5_1" name="Field5" type="radio" value="Second Choice" tabindex="6">
              <label class="choice" for="Field5_1">Cohort 2</label>
          </div>
          <div>
              <input id="Field5_2" name="Field5" type="radio" value="Third Choice" tabindex="7">
              <label class="choice" for="Field5_2">Cohort 3</label>
          </div>
        </div>
      </fieldset>
    </div>
      
    <div>
      <label class="desc" id="title106" for="Field106">
          Select Students
      </label>
      <div>
      <select id="Field106" name="Field106" class="field select medium" tabindex="11"> 
        <option value="First Choice">Joe Bloggs</option>
        <option value="Second Choice">Mary Jane</option>
        <option value="Third Choice">Donald Trump</option>
      </select>
      </div>
    </div>
    <!--The intention here is to have a text box that shows who you have selected, in the same fashion as setting up a group on Facebook Messenger or Teams -->
    <div>
      <label class="desc" id="title4" for="Field4">
        Selected Students
      </label>
    
      <div>
        <textarea id="Field4" name="Field4" spellcheck="true" rows="10" cols="50" tabindex="4"></textarea>
      </div>
    </div>
    
    <div>
          <div>
            <input id="saveForm" name="saveForm" type="submit" value="Submit">
      </div>
      </div>
    
  </form>
@endsection