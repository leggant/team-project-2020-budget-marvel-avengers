@extends('layouts.app')

@section('title')
Studio Management Portal | Notes
@endsection

@section('content')
<section>
  <h1>Student Notes</h1>
  <form action="">
    <label for="First-name">First Name</label>
    <input id="First-name" name="First-name" type="text" placeholder="First Name"> 
    <label for="Last-name">Last Name</label>
    <input id="Last-name" name="Last-name" type="text" placeholder="Last Name"> 
    <label for="Student-id">Student ID:</label>
    <input id="Student-id" name="Student-id" type="email" spellcheck="false" maxlength="255" placeholder="ID Number"> 
    <label for="FileNotes">Notes:</label>
    <textarea id="FileNotes" name="Notes" spellcheck="true" placeholder="Enter notes here"></textarea>
    <input id="saveForm" name="saveForm" type="submit" value="Submit" class="submit-btn">
  </form>
</section>
@endsection