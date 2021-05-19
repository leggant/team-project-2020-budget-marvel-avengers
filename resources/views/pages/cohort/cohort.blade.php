<!-- Cohort screen-->
@extends('layouts.app')
@section('title')
    Studio Management Portal | Cohort
@endsection
<!-- Form begins-->
@section('content')
<section class='cohort-screen'>
    <h1>Cohort Assignment</h1>
    <form id="cohort-form" action="{{ route('cohorts.store')}}" method='POST'>
        @csrf
        <fieldset id="cohort-select">
           
        </fieldset>
    </form>
        <table class="cohort-table">
            <thead>
                <tr class="c-header-row">
                <th scope="col">Paper</th>
                <th scope="col">Students</th>
                <th scope="col">Edit</th>
                </tr>
            </thead>

            
            <tbody>
                @foreach ($cohort as $cohorts)
                    <tr class="c-row">
                        <td>{{ $cohorts->name }}</td>
                        <td>{{ $cohorts->paper }}</td>
                        <td>{{ $cohorts->cohort }}</td>
                    </tr>
                    </tr>
                @endforeach
            </tbody>
        </table>
   
</section>
@endsection
