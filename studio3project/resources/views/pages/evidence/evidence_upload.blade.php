@extends('layout.app')

@section('title')
Studio Management Portal | Upload Evidence
@endsection

@section('content')
    <section class="container-lg">
        <h1>Evidence Uploads</h1>
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