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
        <!-- <div class="form-col"> -->
        <h3>Insert New Record</h3>
        <form action="{{ route('uploads.store') }}" method="POST">
            @csrf
            <div class="form-col">
                <div class="input-group">
                    <label for="studentName">Student Name</label>
                    <select id="studentName" name="student_id">
                        <option>Select Student....</option>
                        @foreach ($uploads as $student)
                            <option value="{{ $student->id }}">{{ $student->first_name }}</option>
                        @endforeach
                    </select>
                    <!-- <input type="text" id="studentName" class="form-control" placeholder="Enter Student Name" name="studentName"> -->
                </div>
                <div class="input-group">
                    <label for="fileurl">Document URL</label>
                    <input type="url" id="fileurl" class="form-control" placeholder="Enter URL....." name="uploadURL">
                </div>
                <div class="input-group">
                    <textarea name="description" id="description" placeholder="Enter a description...."></textarea>
                </div>
                <div class="input-group">
                    <button class="submit-btn" type="submit">Save URL</button>
                </div>
            </div>
        </form>
    </section>
@endsection
