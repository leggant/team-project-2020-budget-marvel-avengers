@extends('layouts.app')
@section('title')
    Studio Management Portal | Student Details
@endsection
@section('content')
<section class="student-section">
<h1>{{$student->first_name}} {{$student->last_name}} </h1>


<div class=temp>studentID: {{$student->studentID}}</div>
<div class=temp>GitHub: {{$student->github_username}}</div>
<div class=temp>Email: {{$student->student_email}}</div>

<div class=temp></div>
<div class=temp></div>

@foreach ($student->notes as $user)
<div class=temp>Notes: {{$user->note}}</div>
@endforeach

@foreach ($student->uploads as $user)
<div class=temp>Upload URL: {{ $user->uploadURL }}</div>
<div class=temp>Description: {{ $user->description }}</div>
@endforeach


</section>
@endsection 
