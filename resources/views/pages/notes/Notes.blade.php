@extends('layouts.app')

@section('title')
Studio Management Portal | Notes
@endsection

@section('content')
<section>
    <h1>Student Notes</h1>
    <form action="{{ route('notes.store') }}" method="POST">
        @csrf
        <div class="form-col">
            <div class="input-group">
                <label for="student_name">Student Name:</label>
                <select id="student_name" name="student_name" required>
                <option value="">--- Select Name ---</option>
                    @foreach ($student as $key => $value)
                    <option value="{{ $key }}">{{ $value->first_name}} {{ $value->last_name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-col">
            <div class="input-group">
                <label for="note">Notes:</label>
                <textarea id="note" name="note" spellcheck="true" placeholder="Enter notes here"></textarea>
            </div>
            <div class="input-group">
                <input id="saveForm" name="saveForm" type="submit" value="Submit" class="submit-btn">
            </div>
        </div>
    </form>
  
</section>
@endsection


