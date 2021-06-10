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
                <select id="student_name" name="student_id" required>
                <option>--- Select Name ---</option>
                @foreach($students as $student)
                <option value="{{ $student->id }}">{{ $student->first_name }} {{ $student->last_name }}</option>     
                @endforeach
                </select>
            </div>
        </div>
        <div class="form-col">
            <div class="input-group">
                <label for="note">Notes:</label>
                <textarea id="note" name="note" spellcheck="true" placeholder="Enter notes here" required></textarea>
            </div>
            <div class="input-group">
                <input id="saveForm" name="saveForm" type="submit" value="Submit" class="submit-btn">
            </div>
        </div>
    </form>
</section>
@endsection
