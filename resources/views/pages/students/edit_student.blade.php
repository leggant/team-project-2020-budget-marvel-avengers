@extends('layouts.app')

@section('content')
<div class="col-1">
    <section>
        <h1>Edit student</h1>
        <form action="{{ route('students.update', $student->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-col">
            <div class="input-group">
                <input type="text" name="first_name" value="{{ $student->first_name }}">
                <input type="text" name="last_name" value="{{ $student->last_name }}">
            </div>
            <div class="input-group">
                <input type="text" name="studentID" value="{{ $student->studentID }}">
                <input type="text" name="github_username" value="{{ $student->github_username }}" placeholder="GitHub User Name">
            </div>
            <div class="input-group">
                <input type="email" name="student_email" value="{{ $student->student_email }}" placeholder="Student Email">
                <button class="submit-btn"  type="submit">Submit</button>
            </div>
            </div>
        </form>
</section>
</div>
@endsection