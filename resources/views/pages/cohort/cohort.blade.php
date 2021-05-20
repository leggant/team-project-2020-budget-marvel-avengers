
<!-- Cohort screen-->
@extends('layouts.app')
@section('title')
    Studio Management Portal | Cohort
@endsection
<!-- Form begins-->
@section('content')
<section class='cohort-screen'>
    <h1>Cohort Assignment</h1>

    <div class='cohort-row'>
        <button type='submit'><</button>
        <h2>Current Cohort</h2>
        <button type='submit'>></button>
    </div>

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
                <th scope="col">Submit</th>
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
                                {{-- <input type="text" id = "students" class="cohort-students" placeholder="Enter Students" name="students" >  --}}
                                <textarea id="cohort-input" name="cohort-review" rows="4" cols="50"></textarea>
                            </td>
                            <td>
                                <div><button class="submit-btn" type="submit">Edit</button></div>
                                <div><button class="submit-btn" type="submit">Submit</button></div>
                            </td>
                        </form>
                    </tr>
                @endfor 
            </tbody>
        </table>
   
</section>
@endsection
