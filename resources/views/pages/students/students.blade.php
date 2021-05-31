@extends('layouts.app')
@section('title')
    Studio Management Portal | Student Details
@endsection
@section('content')
    <section class="student-section">
        <article>
            <h1>Students</h1>
            <form class="student-form" action="{{ route('students.store') }}" method="POST">
                @csrf
                <div class="form-col">
                    <div class="input-group">
                        <div>
                            <input type="text" name="first_name" placeholder="Student First Name">
                            <input type="text" name="last_name" placeholder="Student Last Name">
                            <input type="text" name="studentID" placeholder="Student ID">
                            <input type="text" name="github_username" placeholder="GitHub Username">
                            <input type="email" name="student_email" placeholder="student@student.op.ac.nz">
                            <button class="submit-btn" type="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </article>
        <article class="student-table">
            <table cellpadding="0" cellspacing="0" cellborder="0">
                <thead>
                    <tr>
                        <th>Student ID</th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Student email</th>
                        <th>Github username</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($student as $user)
                        <tr>
                            <td>
                                <a href="{{ route('student.show', $user->id) }}">{{ $user->studentID }}</a>
                            </td>
                            <td>
                                <a href="{{ route('student.show', $user->id) }}">{{ $user->first_name }}</a>
                            </td>
                            <td>
                                <a href="{{ route('student.show', $user->id) }}">{{ $user->last_name }}</a>
                            </td>
                            <td>
                                <a href="{{ route('student.show', $user->id) }}">{{ $user->student_email }}</a>
                            </td>
                            <td>
                                <a href="{{ route('student.show', $user->id) }}">{{ $user->github_username }}</a>
                            </td>
                            <td class="actions">
                                <form action="{{ route('students.edit', $user->id) }}" method="GET">
                                    @csrf
                                    @method('POST')
                                    <button class="btn btn-edit" type="submit" class="">Edit</button>
                                </form>
                                <form onsubmit="return confirm('Do you really want to delete this student?');"
                                    action="{{ route('students.destroy', $user->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-delete" type="submit" class="">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </article>
    </section>
@endsection
