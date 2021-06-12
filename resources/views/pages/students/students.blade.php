@extends('layouts.app')
@section('title')
    Studio Management Portal | Student Details
@endsection
@section('content')
<div class="col-2">
    <section>
        <h1>Add New Student</h1>
        <form class="student-form" action="{{ route('students.store') }}" method="POST">
            @csrf
            <div class="form-col">
                <div class="input-group">
                    <input type="text" name="first_name" placeholder="Student First Name" required>
                    <input type="text" name="last_name" placeholder="Student Last Name" required>
                </div>
                <div class="input-group">
                    <input type="text" name="studentID" placeholder="Student ID" required>
                    <input type="text" name="github_username" placeholder="GitHub Username">
                </div>
                <div class="input-group">
                    <input type="email" name="student_email" placeholder="student@student.op.ac.nz" >
                    <button class="submit-btn" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </section>
    <section>
        <h1>Students</h1>
        <div class="scroll">
        @foreach ($student as $xstudent)
            <article class="student-card ">
                <p><a href="{{ route('student.show', $xstudent->id) }}" title="Students ID# {{ $xstudent->studentID }}">{{ $xstudent->first_name }} {{ $xstudent->last_name }}</a></p>
                <p><a href="mailto:{{ $xstudent->student_email }}">Email</a></p>
                <p>Github: {{ $xstudent->github_username }}</p>
                <div class="actions">
                    <form action="{{ route('student.show', $xstudent->id) }}" method="GET">
                        @csrf
                        <button class="btn btn-show" type="submit">Show</button>
                    </form>
                    <form action="{{ route('students.edit', $xstudent->id) }}" method="GET">
                        @csrf
                        <button class="btn btn-edit" type="submit">Edit</button>
                    </form>  
                </div>
            </article>
        @endforeach
        </div>
    </section>
    </div>
@endsection
