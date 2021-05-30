<!-- Cohort screen-->
@extends('layouts.app')
@section('title')
    Studio Management Portal | Cohort
@endsection
<!-- Form begins-->
@section('content')
    <section class='cohort-screen'>
        <h1>Studio Paper Cohorts</h1>
        <form id="cohort-form" action="{{ route('cohort.store') }}" method='POST'>
            @csrf
            <div class="form-col">
                <div class="input-group">
                    <label for="semester1">Semester 1
                    <input type="radio" name="semester" id="semester1" value="Semester 1" checked></label>
                    <label for="semester2">Semester 2
                    <input type="radio" name="semester" id="semester2" value="Semester 2"></label>
                </div>
                <div class="input-group">
                    <label for="studio-1">Studio 1
                    <input type="radio" name="studiopaper" id="studio-1" value="Studio 1" checked></label>
                    <label for="studio-2">Studio 2
                    <input type="radio" name="studiopaper" id="studio-2" value="Studio 2"></label>
                    <label for="studio-3">Studio 3
                    <input type="radio" name="studiopaper" id="studio-3" value="Studio 3"></label>
                    <label for="studio-4">Studio 4
                    <input type="radio" name="studiopaper" id="studio-4" value="Studio 4"></label>
                    <label for="studio-5">Studio 5
                    <input type="radio" name="studiopaper" id="studio-5" value="Studio 5"></label>
                    <label for="studio-6">Studio 6
                    <input type="radio" name="studiopaper" id="studio-6" value="Studio 6"></label>
                </div>
                <div class="input-group">
                    <select>
                        <option>--- Select Cohort ---</option>
                        @foreach ($cohort as $key => $value)
                            <option value="{{ $value->id }}">{{ $value->semester }} {{ $value->studiopaper }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-col">
                <textarea id="students" name="students" rows="4" cols="50"></textarea>
                <button class="submit-btn" type="submit">Submit</button>
            </div>
        </form>
    </section>
    <section>
        <h1>Update Cohorts</h1>
        <form action="{{ route('cohort.index') }}" method="get">
            @csrf
            <div class="form-col">
                <div class="input-group">
                    <select>
                        <option>--- Select Cohort ---</option>
                        @foreach ($cohort as $key => $value)
                            <option value="{{ $value->id }}">{{$value->studiopaper}}</option>
                        @endforeach
                    </select>
                    <div class="form-col">
                    {{-- <textarea id="students" name="students" readonly class="cohort-show"> --}}
                    {{-- </textarea> --}}
                        @foreach ($cohort as $key => $value)
                        <article>
                            <h3>{{ $value->semester }} {{ $value->studiopaper }}</h3>
                            <p>{{ $value->students }}</p>
                        </article>
                        @endforeach
                    </div>
                </div>
                <button type="submit" class="submit-btn">Update</button>
            </div>
        </form>
    </section>
@endsection
