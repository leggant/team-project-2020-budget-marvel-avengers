@extends('layouts.app')

@section('title')
    Studio Management Portal | Available Uploads
@endsection

@section('content')
<section id="evidence">
    <header>
        <h1>Evidence Uploads</h1>
    </header>
    <form>
        <div class="form-col">
            <h3>Current Uploads</h3>
            <div class="input-group">
                <label for="studioPaper">Select Studio Paper:</label>
                <select name="studioPapers" id="studioPaper">
                    <option value="studio-1">Studio 1</option>
                    <option value="studio-2">Studio 2</option>
                    <option value="studio-3">Studio 3</option>
                    <option value="studio-4">Studio 4</option>
                    <option value="studio-5">Studio 5</option>
                    <option value="studio-6">Studio 6</option>
                </select>
            </div>
            <div class="input-group">
                <label for="semester-1">Semester 1</label>
                <input type="radio" name="semester" id="semester-1" value="semester-1" checked>
                <label for="semester-2">Semester 2</label>
                <input type="radio" name="semester" id="semester-2" value="semester-2">
            </div>
            <div class="input-group">
                <label for="students">Select Student:</label>
                <select name="studioStudents" id="students">
                    <option value="student-1">Student One</option>
                    <option value="student-2">Student Two</option>
                    <option value="student-3">Student Three</option>
                    <option value="student-4">Student Four</option>
                    <option value="student-5">Student Five</option>
                </select>
            </div>
            
        </div>
        <div class="form-col">
            <h3>Upload Files</h3>
            
        </div>
    </form>
</section>
@endsection