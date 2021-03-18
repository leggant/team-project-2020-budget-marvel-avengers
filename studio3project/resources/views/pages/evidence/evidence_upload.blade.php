@extends('layouts.app')

@section('title')
Studio Management Portal | Upload Evidence
@endsection

@section('content')
<setion class="grid-container" id="evidence">
  <div class="title">
      <h1>Evidence Uploads</h1>
  </div>
  <div class="search-output">
  <h3>Select Student From Search Results</h3>
  <div class="student-profile">
        <label for="studentname1">Student Name 1
        <input type="radio" checked name="test" value="studentid1" id="studentname1">
        <img src="https://placeimg.com/50/50/tech">
        </label>
    </div>
    <div class="student-profile">
        <label for="studentname2">Student Name 2
        <input type="radio" name="test" value="studentid2" id="studentname2">
        <img src="https://placeimg.com/50/50/people">
        </label>
    </div>
  </div>
  <div class="form-search">
  <h2>Student Search</h2>
    <form class="evidence-form">
        <div class="evidence-select-search-group">
            <div class="input-group">
                <p class="input-group-text">Search Student by:</p>
            </div>
            <select class="custom-select" id="inputGroupSelect">
                <option selected>Choose...</option>
                <option value="ID">ID#</option>
                <option value="Name">Name</option>
                <option value="Paper">Paper</option>
            </select>
            <input type="search" class="form-control" name="searchStudent" id="searchStudent" placeholder="Enter Here....">
            <button type="submit" class="form-control btn btn-outline-primary search-btn">Search</button>
        </div>
    </form>
  </div>
  <div class="file-upload">
      <h2>Attach Evidence Documents</h2>
    <form>
        <div class="input-group">
            <label for="textbox">
            <p class="input-group-text">Additional Comments:</p>
                <textarea name="comments" id="textbox" cols="30" rows="5" ></textarea>
            </label>
        </div>
        <div class="input-group">
            <label class="input-group-text" for="inputFile">Select File(s) For Upload</label>
            <input type="file" class="form-control" id="inputFile" multiple accept=".jpg,.jpeg,.png,.pdf,.doc,.docx,.html,.md">
        </div>
        <div class="input-group">
            <label class="input-group-text" for="fileurl">Docuement URL</label>
            <input type="url" id="fileurl" class="form-control" placeholder="Insert Weblink.....">
        </div>
        <div class="input-group">
            <label for="DateRecieved">Date :</label>
            <input type="datetime-local" id="DateRecieved" name="DateRecieved">
        </div>
        <button type="submit">Save Files</button>
    </form>
  </div>
</setion>
@endsection