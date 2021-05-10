@extends('layouts.app')

@section('title')
Studio Management Portal | Notes
@endsection

@section('content')
<section>
  <h1>Student Notes</h1>
  <form action="">
    <div class="form-col">
      <div class="input-group">
        <label for="Student-id">Student ID:</label>
        <input id="Student-id" name="Student-id" type="email" spellcheck="false" maxlength="255" placeholder="ID Number"> 
      </div>
    </div>
    <div class="form-col">
      <div class="input-group">
        <label for="FileNotes">Notes:</label>
        <textarea id="FileNotes" name="Notes" spellcheck="true" placeholder="Enter notes here"></textarea>
      </div>
        <input id="saveForm" name="saveForm" type="submit" value="Submit" class="submit-btn">
      </div>
    </div>
  </form>
</section>
@endsection