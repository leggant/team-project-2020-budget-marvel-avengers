@extends('layouts.app')
@section('title')
    Studio Management Portal | Student Details
@endsection
@section('content')
    <section>
        <h1>Student Page</h1>
        <form>
            <label for="fname">First name:</label>
            <input type="text" id="fname" name="fname">
            <label for="lname">Last name:</label>
            <input type="text" id="lname" name="lname">
            <label for="ghUser">GitHub Username:</label>
            <input type="text" id="ghUser" name="ghUser">
            <label for="idNumber">Student ID Number:</label>
            <input type="text" id="idNumber" name="idNumber">
            <label for="email">Student Email:</label>
            <input type="email" name="email" id="email">
            <button class="submit-btn" type="submit">Submit</button>
        </form>
    </section>
@endsection
