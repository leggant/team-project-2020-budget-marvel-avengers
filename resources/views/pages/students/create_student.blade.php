@extends('layouts.app')
@section('content')
<section>
    <h1>Add new  student</h1>
<form action="{{ route('students.store') }}" method="POST">
    @csrf
    <div class="input-group">
        <label for="first_name">First name:</label>
        <input type="text" id="first_name" name="first_name">
    </div>
    <div class="input-group">
        <label for="last_name">Last name:</label>
        <input type="text" id="last_name" name="last_name">
       
    </div>
    <div class="input-group">
        <label for="studentID">studentID:</label>
        <input type="text" id="studentID" name="studentID">
    </div>
    <div class="input-group">
        <label for="github_username">GitHub username:</label>
        <input type="text" id="github_username" name="github_username">
    </div>
    <div class="input-group">
        <label for="student_username">student_username:</label>
        <input type="text" id="student_username" name="student_username">
    </div>

    <div class="input-group">
        <label for="student_email">Student Email:</label>
        <input type="email" name="student_email" id="student_email">
    </div>
    <button class="submit-btn" type="submit">Submit</button>
</form>
    @endsection
</section>