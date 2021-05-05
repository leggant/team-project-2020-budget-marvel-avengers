@extends('layouts.app')

@section('title')
    Studio Management Portal | Student Details
@endsection

@section('content')
    <h1>Student Details</h1>
    <form>
        <div class="input-group">
            <label for="firstName">First name:</label>
            <input type="text" id="firstName" name="firstName">
        </div>
        <div class="input-group">
            <label for="lastName">Last name:</label>
            <input type="text" id="lastName" name="lastName">
        </div>
        <div class="input-group">
            <label for="githubUserName">GitHub Username:</label>
            <input type="text" id="githubUserName" name="githubUserName">
        </div>
        <div class="input-group">
            <label for="idNumber">Student ID Number:</label>
            <input type="text" id="idNumber" name="studentIdNumber">
        </div>
        <div class="input-group">
            <label for="studentEmail">Student Email:</label>
            <input type="email" name="studentEmail" id="studentEmail">
        </div>
        <button class="submit-btn" type="submit">Submit</button>
    </form>
@endsection