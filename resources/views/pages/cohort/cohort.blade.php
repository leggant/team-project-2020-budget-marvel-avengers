@extends('layouts.app')
@section('title')
    Studio Management Portal | Cohort
@endsection
@section('content')
    <section>
        <header>
            <h1>Create Cohort</h1>
        </header>
        <form action="{{ route('cohort.store') }}" method="POST" class="cohort-form">
            @csrf
            <div class="input-group">
                <label for="semester1">Semester 1
                <input type="radio" name="semester" id="semester1" value="Semester 1" checked></label>
                <label for="semester2">Semester 2
                <input type="radio" name="semester" id="semester2" value="Semester 2"></label>
            </div>
            <select id="student_name" name="year" required class="cohort-select">
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
            </select>
            <input id="saveForm" type="submit" value="Submit" class="submit-btn">
        </form>
        <header>
            <h1>Studio Paper Cohorts</h1>
        </header>
        <form action="{{ route('semesters.store') }}" method="POST" class="cohorts-form">
            @csrf
            <div class="form-col">
                <select id="student_name" name="cohort_id" required>
                    <option>--- Select Cohort ---</option>
                    @foreach ($cohort as $value)
                    <option value="{{ $value->id }}">{{ $value->semester}} {{ $value->year }}</option>
                    @endforeach
                </select>
                <textarea id="student-names" name="students" placeholder="Enter student names ✍🏻"></textarea>
                <input type="submit" value="Submit" class="submit-btn">
            </div>
            <div class="form-col">
                <label for="studio1">Studio 1
                    <input type="radio" name="studio" id="studio1" value="Studio 1" checked>
                </label>
                <label for="studio2">Studio 2
                    <input type="radio" name="studio" id="studio2" value="Studio 2">
                </label>
                <label for="studio3">Studio 3
                    <input type="radio" name="studio" id="studio3" value="Studio 3">
                </label>
                <label for="studio4">Studio 4
                    <input type="radio" name="studio" id="studio4" value="Studio 4">
                </label>
            </div>
        </form>
    </section>
    <section>
        <table cellpadding="0" cellspacing="0" cellborder="0">
            <thead>
                <tr>
                    <th>List of Cohorts 📜</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cohort as $key)
                    <tr>
                        <td>
                            <a href="{{ route('semesters.show', $key->id) }}">
                                {{ $key->year }}
                                {{ $key->semester }}
                            </a>
                        </td>
                        <td>
                            <form onsubmit="return confirm('Do you really want to delete this cohort?');"
                                action="{{ route('cohort.destroy', $key->id) }}" method="POST">
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