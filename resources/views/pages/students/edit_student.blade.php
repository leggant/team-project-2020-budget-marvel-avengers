@extends('layouts.app')

@section('content')
<section>
    <h1>Edit student</h1>
    <form action="{{ route('students.update',$student->id) }}" method="POST">
        @csrf
        @method('PUT')

                    <div class="input-group">
                        <label for="first_name">First name:</label>
                        <input type="text" id="first_name" name="first_name" value="{{ $student->first_name }}">
                    </div>
                    <div class="input-group">
                        <label for="last_name">Last name:</label>
                        <input type="text" id="last_name" name="last_name" value="{{ $student->last_name }}">
                       
                    </div>
                    <div class="input-group">
                        <label for="studentID">studentID:</label>
                        <input type="text" id="studentID" name="studentID" value="{{ $student->studentID }}">
                    </div>
                    <div class="input-group">
                        <label for="github_username">GitHub username:</label>
                        <input type="text" id="github_username" name="github_username" value="{{ $student->github_username }}">
                    </div>
                    <div class="input-group">
                        <label for="student_username">student_username:</label>
                        <input type="text" id="student_username" name="student_username" value="{{ $student->student_username }}">
                    </div>
                
                    <div class="input-group">
                        <label for="student_email">Student Email:</label>
                        <input type="email" name="student_email" id="student_email" value="{{ $student->student_email }}">
                    </div>
                    <button class="submit-btn" type="submit">Submit</button>
                </div>
        </div>

    </form>
@endsection
</section>