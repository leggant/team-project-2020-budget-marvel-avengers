@extends('layouts.app')

@section('title')
Studio Management Portal | Upload Evidence
@endsection

@section('content')
    <section class="container" id="evidence">
        <h1>Evidence Uploads</h1>
        <div class="form-wrapper">
            <h2>Student Search</h2>
            <form class="evidence-form">
                <div class="input-group evidence-select-search-group">
                    <div class="input-group-prepend">
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
        <div>
        <h2>Select Student From Search Results</h2>
            <form class="evidence-form">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <p class="input-group-text">Search Student by:</p>
                    </div>
                    <select class="custom-select" id="inputGroupSelect">
                        <option selected>Choose...</option>
                        <option value="1">ID#</option>
                        <option value="2">Name</option>
                    </select>
                    <input type="search" class="form-control" name="searchStudent" id="searchStudent">
                    <button type="submit" class="form-control btn btn-outline-primary">Search</button>
                </div>
            </form>
        </div>
        <div>
            {{-- // set number of files to upload --}}
            {{-- // set file types .ie PDF, Word, Jpeg, PNG, txt.... --}}
            <form class="col-8">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputFile">Upload</label>
                    <input type="file" class="form-control" id="inputFile" multiple accept=".jpg,.jpeg,.png,.pdf,.doc,.docx,.html,.md">
                    <input type="url" class="form-control" placeholder="Insert Weblink.....">
                </div>
                <button type="submit">Save Files</button>
            </form>
        </div>
    </section>
@endsection