@extends('layouts.app')
@section('title')
Studio Management Portal | Notes Edit
@endsection
@section('content')
<div class="col-1">
<section>
    <h1>Student Notes</h1>
    <form action="{{ route('notes.update', $note->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-col">
            <div class="input-group">
                <label for="note">Notes:</label>
                <textarea id="note" name="note" spellcheck="true" required>{{ $note->note }}</textarea>
            </div>
            <div class="input-group">
                <input id="saveForm" name="saveForm" type="submit" value="Save" class="submit-btn">
            </div>
        </div>
    </form>
</section>
</div>
@endsection