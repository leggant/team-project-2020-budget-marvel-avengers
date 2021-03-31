@extends('layouts.app')
@section('homepage-content')
<h1>Student Page</h1>
    <form action="">
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname"><br><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname"><br><br>
        <label for="ghUser">GitHub Username:</label><br>
        <input type="text" id="ghUser" name="ghUser"><br><br>
        <label for="idNumber">Student ID Number:</label><br>
        <input type="number" id="idNumber" name="idNumber"><br><br>
        <label for="email">Student Email:</label><br>
        <input type="text" name="email" id="email"><br><br>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br><br>
        
        <input type="submit" value="Submit">

        
    </form>
    @endsection
