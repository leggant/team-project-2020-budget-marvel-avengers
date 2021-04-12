@extends('layouts.app')

@section('title')
    Studio Management Portal | Student Details
@endsection

@section('content')
    <section id="studentDetails">
        <h1>Student Details</h1>
        <form>
            <label for="firstName">First name:</label>
            <input type="text" id="firstName" name="firstName">
            <label for="lname">Last name:</label>
            <input type="text" id="lastName" name="lastName">
            <label for="githubUserName">GitHub Username:</label>
            <input type="text" id="githubUserName" name="githubUserName">
            <label for="idNumber">Student ID Number:</label>
            <input type="text" id="idNumber" name="studentIdNumber">
            <label for="studentEmail">Student Email:</label>
            <input type="email" name="studentEmail" id="studentEmail">
            <button class="submit-btn" type="submit">Submit</button>
        </form>
    </section>
@endsection