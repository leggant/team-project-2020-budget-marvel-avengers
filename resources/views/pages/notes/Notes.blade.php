@extends('layouts.app')

@section('title')
Studio Management Portal | Notes
@endsection

@section('content')
<section>
<div class="formContainer">

<div>
  <label class="desc" id="First-name" for="First-name">
    First Name
  </label>

    <div>
    <input id="First-name" name="First-name" type="text" class="field text fn" value="" size="8" tabindex="1"  placeholder="First Name">
    </div>
</div>

<div>   
    <label class="desc" id="Last-name" for="Last-name">
      Last Name
    </label>
    <div>
    <input id="Last-name" name="Last-name" type="text" class="field text fn" value="" size="8" tabindex="1" placeholder="Last Name"> 
</div>

<div>
  <label class="desc" id="Email" for="Email">
    Email
  </label>
  <div>
    <input id="Email" name="Email" type="email" spellcheck="false" value="" maxlength="255" tabindex="3" placeholder="Email Address"> 
  </div>
</div>

<div>
  <label class="desc" id="Student-id" for="Student-id">
    Student ID:
  </label>
    <div>
    <input id="Student-id" name="Student-id" type="email" spellcheck="false" value="" maxlength="255" tabindex="3" placeholder="ID Number"> 
  </div>
</div>

  <div>
  <label class="desc" id="StudioDropdown" for="StudioDropdown">
    Studio class:
  </label>
<div>
  <select id="StudioDropdown" name="StudioDropdown" class="field select medium" tabindex="11"> 
    <option value="First Choice">Studio 1</option>
    <option value="Second Choice">Studio 2</option>
    <option value="Third Choice">Studio 3</option>
    <option value="Third Choice">Studio 4</option>
    <option value="Third Choice">Studio 5</option>
    <option value="Third Choice">Studio 6</option>
  </select>
  </div>
</div>

<div>
  <label class="desc" id="SemDropdown" for="SemDropdown">
    Semester:
  </label>
<div>
  <select id="SemDropdown" name="SemDropdown" class="field select medium" tabindex="11"> 
    <option value="First Choice">Stream 1</option>
    <option value="Second Choice">Stream 2</option>
  </select>
  </div>
</div>

<div>
  <label class="desc" id="Year" for="Year">
    Year:
  </label>
  <div>
    <input id="Year" name="Year" type="email" spellcheck="false" value="" maxlength="255" tabindex="3" placeholder="Year"> 
  </div>
</div>
  
<div>
  <label class="desc" id="Notes" for="Notes">
    Notes:
  </label>

  <div>
    <textarea id="FielNotesd6" name="Notes" spellcheck="true" rows="10" cols="50" tabindex="4" placeholder="Enter notes here"></textarea>
  </div>
</div>

<div>
  <div>
    <input id="saveForm" name="saveForm" type="submit" value="Submit">
  </div>
</div>
</div>
</section>
@endsection