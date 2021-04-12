@extends('layouts.app')

@section('title')
Studio Management Portal | Notes
@endsection

@section('content')
<section>
  <h1>Student Notes</h1>
  <form action="">
    <label class="desc" for="First-name">First Name</label>
    <input id="First-name" name="First-name" type="text" class="field text fn" value="" size="8" tabindex="1"  placeholder="First Name"> 
    <label class="desc" for="Last-name">Last Name</label>
    <input id="Last-name" name="Last-name" type="text" class="field text fn" value="" size="8" tabindex="1" placeholder="Last Name"> 
    <label class="desc" for="Student-id">Student ID:</label>
    <input id="Student-id" name="Student-id" type="email" spellcheck="false" value="" maxlength="255" tabindex="3" placeholder="ID Number"> 
    <label class="desc" for="FileNotes">Notes:</label>
    <textarea id="FileNotes" name="Notes" spellcheck="true" rows="10" cols="50" tabindex="4" placeholder="Enter notes here"></textarea>
    <input id="saveForm" name="saveForm" type="submit" value="Submit" class="submit-btn">
  </form>
</section>
@endsection