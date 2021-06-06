@extends('layouts.app')
@section('title')
    Studio Management Portal | Student Details
@endsection
@section('content')
    <section>
        <h1>Add New Student</h1>
        <form class="student-form" action="{{ route('students.store') }}" method="POST">
            @csrf
            <div class="form-col">
                <div class="input-group">
                    <input type="text" name="first_name" placeholder="Student First Name">
                    <input type="text" name="last_name" placeholder="Student Last Name">
                    <input type="text" name="studentID" placeholder="Student ID">
                    <input type="text" name="github_username" placeholder="GitHub Username">
                    <input type="email" name="student_email" placeholder="student@student.op.ac.nz">
                </div>
                <button class="submit-btn" type="submit">Submit</button>
            </div>
        </form>
    </section>
    <section>
        <h1>Students</h1>
        @foreach ($student as $xstudent)
            <article class="student-card">
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
                        @method('POST')
                        <button class="btn btn-edit" type="submit">Edit</button>
                    </form>
                    <form onsubmit="return confirm('Do you really want to delete this student?');"
                        action="{{ route('students.destroy', $xstudent->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-delete" type="submit">Delete</button>
                    </form>
                </div>
            </article>
        @endforeach
    </section>
@endsection