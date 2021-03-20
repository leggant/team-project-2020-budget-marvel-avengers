@extends('layouts.app')

@section('title')
Studio Management Portal | Upload Evidence
@endsection

@section('content')
<setion class="grid-container" id="evidence">
  <div class="title">
      <h1>Evidence Uploads</h1>
  </div>
  <div class="file-upload">
      <h2>Attach Evidence Documents</h2>
    <form>
        <div class="input-group">
            <label for="textbox">
            <p>Additional Comments:</p>
                <textarea name="comments" id="textbox" cols="30" rows="5" ></textarea>
            </label>
        </div>
        <div class="input-group">
            <label for="inputFile">Select File(s) For Upload</label>
            <input type="file" class="form-control" id="inputFile" multiple accept=".jpg,.jpeg,.png,.pdf,.doc,.docx,.html,.md">
        </div>
        <div class="input-group">
            <label for="fileurl">Docuement URL</label>
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