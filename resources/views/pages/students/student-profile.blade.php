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
<h3>Notes</h3>
<ul>
@foreach ($student->notes as $user)
<li class=temp>{{$user->note}} {{$user->updated_at->format('d-m-Y')}}</li>
<button class="btn btn-edit"><a  href="{{ route('notes.edit', $user->id)}}">Update</a></button>
<form action="{{route('notes.destroy', $user->id)}}" method="post">
                            @csrf 
                            @method('delete')
  <button class="btn btn-delete" type="submit">Delete</button>
                        </form>
@endforeach
</ul>


<h3 class=temp>Upload URL</h3>
<ul>
@foreach ($student->uploads as $user)
<li class=temp>
    <a href="{{ $user->uploadURL }}" target="_blank">{{ $user->description }} {{$user->updated_at->format('d-m-Y')}}</a>
</li>
@endforeach
</ul>


</section>
@endsection 
