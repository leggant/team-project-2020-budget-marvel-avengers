@extends('layouts.app')
@section('content')
<section>
    <h1>Student Page</h1>
    <form action="">
        <label for="fname">First name:</label>
        <input type="text" id="fname" name="fname">
        <label for="lname">Last name:</label>
        <input type="text" id="lname" name="lname">
        <label for="ghUser">GitHub Username:</label>
        <input type="text" id="ghUser" name="ghUser">
        <label for="idNumber">Student ID Number:</label>
        <input type="number" id="idNumber" name="idNumber">
        <label for="email">Student Email:</label>
        <input type="text" name="email" id="email">
        <input type="submit" value="Submit" class="submit-btn">
    </form>
</section>
@endsection
