@extends('layouts.app')

@section('title')
    Studio Management Portal | Evidence
@endsection

@section('content')
    <section id="evidence">
        <header>
            <h1>File Location Data</h1>
        </header>
        @if (session('status'))
            <div class="alert alert-success">
                <h4>{{ session('status') }}</h4>
            </div>
        @endif
        <h3>Insert New Record</h3>
        <form action="{{ route('uploads.store') }}" method="POST">
            @csrf
            <div>
                <div class="input-group">
                    <label for="studentName">Student Name</label>
                    <select id="studentName" name="student_id" required>
                        <option>Select Student....</option>
                        @foreach ($uploads as $student)
                            <option value="{{ $student->id }}">{{ $student->first_name }} {{ $student->last_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group">
                    <label for="fileurl">Document URL</label>
                    <input type="url" id="fileurl" class="form-control" placeholder="Enter URL....." name="uploadURL"
                        required>
                </div>
            </div>
            <div>
                <div class="input-group">
                    <label for="description">Link Description: </label>
                    <textarea name="description" id="description" placeholder="Enter a description...." required></textarea>
                </div>
                <div class="input-group">
                    <button class="submit-btn" type="submit">Save URL</button>
                </div>
            </div>
        </form>
    </section>
@endsection
