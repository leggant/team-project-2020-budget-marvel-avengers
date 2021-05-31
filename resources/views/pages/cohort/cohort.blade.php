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
        </div>
        <form action="{{ route('cohort.store') }}" method="POST">
            <div class="input-group">
                <input list="years" name="years">
                <datalist id="years">
                    <option value="2018">
                    <option value="2019">
                    <option value="2020">
                    <option value="2021">
                    <option value="2022">
                    <option value="2023">
                </datalist>
                <input id="selectSemester1" name="radioForm" type="radio" value="Semester 1" class="radio">
                <label for="selectSemester1">Semester 1 </label>
                <input id="selectSemester2" name="radioForm" type="radio" value="Semester 2" class="radio">
                <label for="selectSemester2">Semester 2 </label>
            </div>
            @csrf
            <div class="input-group">
                <input id="saveForm" name="saveForm" type="submit" value="Submit" class="submit-btn">
            </div>
            </div>
        </form>
        <table id="cohort-paper">
            <tr>
                <form action="{{ route('semesters.store') }}" method="POST">
                    <h1>Studio 1</h1>
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
            </tr>
            <tr>
                <form action="{{ route('semesters.store') }}" method="POST">
                    <h1>Studio 2</h1>
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
            </tr>
            <tr>
                <form action="{{ route('semesters.store') }}" method="POST">
                    <h1>Studio 3</h1>
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
            </tr>
            <tr>
                <form action="{{ route('semesters.store') }}" method="POST">
                    <h1>Studio 4</h1>
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
            </tr>
        </table>
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
