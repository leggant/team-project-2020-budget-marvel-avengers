@extends('layouts.app')

@section('title')
Studio Management Portal | Upload Evidence
@endsection

@section('content')
    <section class="container">
        <h1>Evidence Uploads</h1>
        <div class="row">
            <h2>Student Search</h2>
            <form>
                <div class="input-group mb-3 d-flex">
                    <div class="input-group-prepend">
                        <p class="btn btn-outline-secondary disabled">Search Student by:</p>
                    </div>
                    <select class="custom-select" id="inputGroupSelect03">
                        <option selected>Choose...</option>
                        <option value="1">ID#</option>
                        <option value="2">Name</option>
                        <option value="3">Paper</option>
                    </select>
                </div>
            </form>
        </div>
        <div class="row">
            {{-- // set number of files to upload --}}
            {{-- // set file types .ie PDF, Word, Jpeg, PNG, txt.... --}}
            <form class="col-8">
                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="inputGroupFile02">
                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                </div>
                <button type="submit">Save Files</button>
            </form>
        </div>
    </section>
@endsection