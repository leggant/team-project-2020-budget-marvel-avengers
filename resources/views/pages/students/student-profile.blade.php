@extends('layouts.app')
@section('title')
    Studio Management Portal | Student Details
@endsection
@section('content')
    <section>
        <h1>{{ $student->first_name }} {{ $student->last_name }} </h1>
        <div>studentID: {{ $student->studentID }}</div>
        <div>GitHub: {{ $student->github_username }}</div>
        <div>Email: {{ $student->student_email }}</div>
    </section>
    <section>
        <h1>{{ $student->first_name }} Links</h1>
        <ul>
            @foreach ($student->uploads as $user)
                <li>
                    <a href="{{ $user->uploadURL }}" target="_blank">{{ $user->description }}
                        {{ $user->updated_at->format('d-m-Y') }}</a>
                </li>
            @endforeach
        </ul>
    </section>
    <section>
        <h1>{{ $student->first_name }} Notes</h1>
        <ul>
            @foreach ($student->notes as $user)
                <li>{{ $user->note }} {{ $user->updated_at->format('d-m-Y') }}</li>
            @endforeach
        </ul>
    </section>
@endsection