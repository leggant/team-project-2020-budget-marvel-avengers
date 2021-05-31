<!-- Cohort screen-->
@extends('layouts.app')
@section('title')
    Studio Management Portal | Cohort
@endsection
<!-- Form begins-->
@section('content')
    <section class='cohort-screen'>

        <div class="createCohort">
            <h1>Create Cohort</h1>
            <form action="{{ route('cohort.store') }}" method="POST">
        </div>
        <div class="input-group">
            <input id="selectSemester1" name="radioForm" type="radio" value="Semester 1" class="radio">
            <label for="selectSemester1">Semester 1 </label>
            
            <input id="selectSemester2" name="radioForm" type="radio" value="Semester 2" class="radio">
            <label for="selectSemester2">Semester 2 </label>
        </div>
        @csrf
        <div class="form-col">
            <div class="input-group">
                <textarea id="note" name="name" spellcheck="true" placeholder="Enter Cohort name ✍🏻"></textarea>
            </div>
            <div class="input-group">
                <input id="saveForm" name="saveForm" type="submit" value="Submit" class="submit-btn">
            </div>
        </div>
        </form>
        <h1>Add students</h1>
        <form action="{{ route('semesters.store') }}" method="POST">
            @csrf
            <div class="form-col">
                <div class="input-group">
                    <select id="student_name" name="cohort_id" required>
                        <option>--- Select Cohort ---</option>
                        @foreach ($cohort as $value)
                            <option value="{{ $value->id }}">{{ $value->name }}</option>
                        @endforeach
                    </select>
                    <textarea id="note2" name="students" placeholder="Enter students name ✍🏻"></textarea>
                </div>
                <div class="input-group">
                    <input id="saveForm" name="saveForm" type="submit" value="Submit" class="submit-btn">
                </div>
            </div>
        </form>

        </div>

        <table cellpadding="0" cellspacing="0" cellborder="0">
            <thead>
                <tr>
                    <th>List of Cohorts 📜</th>
                </tr>
            </thead>
        </table>

        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" cellborder="0">
                <tbody>
                    @foreach ($cohort as $key)
                        <tr>
                            <td><a href="{{ route('semesters.show', $key->id) }}">{{ $key->name }}</a></td>
                            <td>
                                <form onsubmit="return confirm('Do you really want to delete this cohort?');"
                                    action="{{ route('students.destroy', $key->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-delete" type="submit" class="">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </section>
@endsection
