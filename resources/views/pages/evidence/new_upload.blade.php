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
    <form action="{{route('uploads.store')}}" method="POST">
        @csrf
        <div>
            <div class="input-group">
                <label for="studentName">Student Name</label>
                <input type="text" id="studentName" class="form-control" placeholder="Enter Student Name" name="studentName">
            </div>
            <div class="input-group">
                <label for="fileurl">Document URL</label>
                <input type="url" id="fileurl" class="form-control" placeholder="Enter URL....." name="uploadURL">
            </div>
        </div>
        <div>
            <div class="input-group">
                <label for="description">Link Description: </label>
                <textarea name="description" id="description" placeholder="Enter a description...."></textarea>
            </div>
            <div class="input-group">
                <button class="submit-btn" type="submit">Save Files</button>
            </div>
        </div>
    </form>
</div>
<div class="form-col studentDocumentLinks">
    <h3>Latest Records</h3>
    <div class="tbl-header">
        <table cellpadding="0" cellspacing="0" cellborder="0" class="titles">
            <thead>
                <tr>
                    <th class="title">Student Name</th>
                    <th class="title">Document URL</th>
                    <th class="title">Description</th>
                    <th class="title">Date</th>
                    <th></th>
                </tr>
            </thead>
        </table>
    </div>
    <div class="tbl-content">
        <table cellpadding="0" cellspacing="0" cellborder="0">
            <tbody>
            @foreach($uploads as $upload)
                <tr>
                    <td><p>{{ $upload->studentName }}</p></td>
                    <td class="documentURL"><a href="{{ $upload->uploadURL }}" target="_blank">{{ $upload->uploadURL }}</a></td>
                    <td class="documentDescription"><p>{{ $upload->description }}</p></td>
                    <td class="datetime"><p>{{ $upload->created_at->format('d-m-Y')}}</p></td>
                    <td class="update-links">
                        <a href="{{ route('uploads.edit', $upload->id)}}"><button class="btn btn-edit">Update</button></a>  
                        <form action="{{route('uploads.destroy', $upload->id)}}" method="post">
                            @csrf 
                            @method('delete')
                            <button class="btn btn-delete" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection