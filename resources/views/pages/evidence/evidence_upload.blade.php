@extends('layouts.app')

@section('title')
    Studio Management Portal | Upload Evidence
@endsection

@section('content')
<section id="evidence">
    <header>
        <h1>Evidence Uploads</h1>
        <h2>Attach Student Evidence Documents</h2>
    </header>
    <form>
        <div class="form-col">
            <div class="input-group">
                <label for="inputFile">Select File(s) For Upload</label>
                <input type="file" id="inputFile" multiple
                    accept=".jpg,.jpeg,.png,.pdf,.doc,.docx,.html,.md,.zip,.7z,.rar">
            </div>
            <div class="input-group">
                <label for="textbox">Additional Comments: </label>
                <textarea name="additional-comments" id="additional-comments"></textarea>
            </div>
            <button class="submit-btn" type="submit">Save Files</button>
        </div>
        <div class="form-col">
            <div class="input-group">
                <label for="fileurl">Document URL</label>
                <input type="url" id="fileurl" class="form-control" placeholder="Insert Weblink.....">
            </div>
            <div class="input-group">
                <label for="DateRecieved">Date Recieved: </label>
                <input type="datetime-local" id="DateRecieved" name="DateRecieved">
            </div>
        </div>
    </form>
</section>
@endsection