<!-- Cohort screen-->
<!-- These lines pull the header from the partials-->
@extends('layouts.app')
@section('title')
    Studio Management Portal | Cohort
@endsection
<!-- Form begins-->
@section('content')
<section>
    <header>
        <h1>Cohort Assignment</h1>
    </header>
    <div>
        <button class="submit-btn"> <a href="#"> View a Cohort</a></button>
    </div>
    <form id="cohort-form" action="{{ route('cohorts.store')}}" method='POST'>
        @csrf
        <fieldset id="cohort-select">
            <select id="cohort" name="cohort" class="field select medium" tabindex="5">
                <option value="First Choice">Started Sem 1 '19</option>
                <option value="Second Choice">Started Sem 2 '19</option>
                <option value="Third Choice">Started Sem 1 '20</option>
                <option value="Fourth Choice">Started Sem 2 '20</option>
                <option value="Fifth Choice">Started Sem 1 '21</option>
                <option value="Fifth Choice">Started Sem 2 '21</option>
            </select>

        </fieldset>

        <label class="desc" id="title106" for="name">
            Student Name:
        </label>

        <textarea id="name" name="name" class="field select medium" tabindex="11"></textarea>

        <label class="desc" id="paper" for="paper">
            Select Paper
        </label>

        <select id="paper" name="paper" class="field select medium" tabindex="11">
            <option value="Studio 1">Studio 1</option>
            <option value="Studio 2">Studio 2</option>
            <option value="Studio 3">Studio 3</option>
            <option value="Studio 4">Studio 4</option>
            <option value="Studio 5">Studio 5</option>
            <option value="Studio 6">Studio 6</option>
        </select>

        <label class="desc" id="github" for="github">
            GitHub Username:
        </label>
        <textarea id="github" name="github" spellcheck="true" rows="1" cols="50" tabindex="4"></textarea>

        <div>
            <button class="submit-btn" type="submit">Submit</button>
        </div>
    </form>
        <table class="cohort-table">
            <thead>
                <tr class="c-header-row">
                <th scope="col">Name</th>
                <th scope="col">Paper</th>
                <th scope="col">GitHub Username</th>
                </tr>
            </thead>

            
            <tbody>
                @foreach ($cohort as $cohorts)
                    <tr class="c-row">
                        {{-- <td>{{ ++$i}}</td> --}}
                        <td>{{ $cohorts->name }}</td>
                        <td>{{ $cohorts->paper }}</td>
                        <td>{{ $cohorts->github }}</td>
                    </tr>
                    {{-- <tr class="c-row">
                    <th>Anthony Legg</th>
                    <td>Studio 3</td>
                    <td>leggant</td>
                    </tr>
                    <tr class="c-row">
                    <th>Mohammed Alhasan</th>
                    <td>Studio 3</td>
                    <td>Mohammed-alhasan</td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
   
</section>
@endsection
