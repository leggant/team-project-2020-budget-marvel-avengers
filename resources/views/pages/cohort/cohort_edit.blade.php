@extends('layouts.app')
@section('title')
    Studio Management Portal | Cohort
@endsection
<!-- Form begins-->
@section('content')
    <section>
        <h1>Edit Semesters</h1>
        <form action="{{ route('semesters.edit',$cohort->id) }}" method="POST" class="cohorts-form">
            @csrf
            @method('PUT')
            <div class="form-col">
                <div class="input-group">
                    <label for="studio1">Studio 1
                        <input type="radio" name="studio" id="studio1" value="Studio 1" checked>
                    </label>
                </div>
                <div class="input-group">
                    <label for="studio2">Studio 2
                        <input type="radio" name="studio" id="studio2" value="Studio 2">
                    </label>
                </div>
                <div class="input-group">
                    <label for="studio3">Studio 3
                        <input type="radio" name="studio" id="studio3" value="Studio 3">
                    </label>
                </div>
                <div class="input-group">
                    <label for="studio4">Studio 4
                        <input type="radio" name="studio" id="studio4" value="Studio 4">
                    </label>
                </div>
            </div>
            <div>
                <textarea id="student-names" name="students" placeholder="Enter student names ✍🏻"></textarea>
            </div>
            <input id="saveForm" name="saveForm" type="submit" value="Submit" class="submit-btn">
        </form>
    </section>
    
@endsection
