@extends('layouts.app')

@section('title')
Studio Management Portal | Notes
@endsection

@section('content')
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
    <input id="Last-name" name="Last-name" type="text" class="field text fn" value="" size="8" tabindex="1" placeholder="Last Name"> 
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
@endsection