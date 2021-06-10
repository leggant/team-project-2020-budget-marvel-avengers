@extends('layouts.app')
@section('title')
    Studio Management Portal | Student Details
@endsection
@section('content')
    <section class="student-profile">
        <h1>{{ $student->first_name }} {{ $student->last_name }} </h1>
        <div>Student #: {{ $student->studentID }}</div>
        <div>GitHub: {{ $student->github_username }}</div>
        <div>Email: {{ $student->student_email }}</div>
    </section>
    <section class="student-profile">
        <h1>{{ $student->first_name }} Links</h1>
        <ul>
            @foreach ($student->uploads as $user)
                <li>
                    <a href="{{ $user->uploadURL }}" target="_blank">{{ $user->description }}
                    {{ $user->updated_at->format('d-m-Y') }}</a>
                    <button class="btn btn-edit"><a href="{{ route('uploads.edit', $user->id) }}">Update</a></button>
                </li>
            @endforeach
        </ul>
    </section>
    <section class="student-profile">
        <h1>{{ $student->first_name }} Notes</h1>
        <ul>
            @foreach ($student->notes as $user)
                <li>{{ $user->note }} {{ $user->updated_at->format('d-m-Y') }}</li>
                <button class="btn btn-edit"><a href="{{ route('notes.edit', $user->id) }}">Update</a></button>
                <form action="{{ route('notes.destroy', $user->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-delete" type="submit">Delete</button>
                </form>
            @endforeach
        </ul>
    </section>
@endsection
