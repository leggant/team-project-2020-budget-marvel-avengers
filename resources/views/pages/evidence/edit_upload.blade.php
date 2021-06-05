@extends('layouts.app')

@section('title')
    Studio Management Portal | {{ $upload->studentName }} Edit Upload
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
    <div class="form-col">
        <h3>Update Record</h3>
        <form action="{{ route('uploads.update', $upload->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-col">
                <div class="input-group">
                    <label for="studentName">Student Name</label>
                    <input type="text" id="studentName" class="form-control" placeholder="Enter Student Name" name="studentName" value="{{ $upload->studentName }}" required>
                </div>
                <div class="input-group">
                    <label for="description">Link Description: </label>
                    <textarea name="description" id="description" placeholder="Enter a description...." required>{{ $upload->description }}</textarea>
                </div>
            </div>
            <div class="form-col">
                <div class="input-group">
                    <label for="fileurl">Document URL</label>
                    <input type="url" id="fileurl" class="form-control" placeholder="Enter URL....." name="uploadURL" value="{{ $upload->uploadURL }}" required>
                </div>
                <button class="submit-btn" type="submit">Update</button>
            </div>
        </form>
    </div>
</section>
@endsection