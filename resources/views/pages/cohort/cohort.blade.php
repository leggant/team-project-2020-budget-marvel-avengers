
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
                <div id="wrapper"></div>
                
                @for ($i = 1; $i <= 6; $i++)
                    <tr>
                        <form id="cohort-screen" method="get" action="">
                            <td>
                                <div id="studio-paper">Studio {{ $i }}</div>
                            </td>
                            <td>
                                <input type="text" id = "students" class="cohort-students" placeholder="Enter Students" name="students" > 
                                <textarea id="cohort-input" name="w3review" rows="4" cols="50"></textarea>
                            </td>
                            <td>
                                <button type="submit-cohort" type="submit">Edit</button>
                            </td>
                        </form>
                    </tr>
                @endfor 
            </tbody>
        </table>
   
</section>
@endsection
