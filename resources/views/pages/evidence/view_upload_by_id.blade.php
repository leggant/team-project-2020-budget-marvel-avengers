@extends('layouts.app')

@section('title')
    Studio Management Portal | View Evidence Uploads
@endsection

@section('content')
<section id="evidence">
    <header>
        <h1>Evidence Uploads</h1>
    </header>
    <form>
        <div class="form-col">
            <h3>Find Student</h3>
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
            <div class="input-group">
                <label for="fileurl">Document URL</label>
                <input type="url" id="fileurl" class="form-control" placeholder="Insert Weblink.....">
            </div>
            <label for="textbox">Additional Comments: </label>
            <div class="input-group">
                <textarea name="additional-comments" id="additional-comments"></textarea>
            </div>
            
        </div>
        <div class="form-col">
            <h3>Upload Files</h3>
            <div class="input-group">
                <input type="file" id="inputFile" multiple
                    accept=".jpg,.jpeg,.png,.pdf,.doc,.docx,.html,.md,.zip,.7z,.rar">
            </div>
            <div class="input-group">
                <label for="DateRecieved">Date Recieved: </label>
                <input type="datetime-local" id="DateRecieved" name="DateRecieved">
            </div>
            <h3>Medical Certificates</h3>
            <div class="input-group">
                <label for="medicalStart">Medical Start Date: </label>
                <input type="datetime-local" id="medicalStart" name="medicalStart">
            </div>
            <div class="input-group">
                <label for="medicalEnd">Medical End Date: </label>
                <input type="datetime-local" id="medicalEnd" name="medicalEnd">
            </div>
            <div class="input-group">
                <input type="file" id="medicalFile"
                    accept=".jpg,.jpeg,.png,.pdf">
            </div>
            <div class="input-group">
                <label for="medicalCert">Medical Certificate Supplied: </label>
                <input type="checkbox" id="medicalCert" name="medicalCert" value="true">
            </div>
            <button class="submit-btn" type="submit">Save Files</button>
        </div>
    </form>
</section>
@endsection