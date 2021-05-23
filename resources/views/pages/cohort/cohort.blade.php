<!-- Cohort screen-->
@extends('layouts.app')
@section('title')
    Studio Management Portal | Cohort
@endsection
<!-- Form begins-->
@section('content')
<section class='cohort-screen'>
    <h1>Cohort Assignment</h1>

        <form>
            <select>
                <option value="">--- Select Cohort ---</option>
                    @foreach ($cohort as $key => $value)
                    <option value="{{ $key }}">{{ $value->names}}</option>
                    @endforeach
                </select>
 
            
        </form>

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
                                <textarea id="cohort-input" name="cohort-review" rows="4" cols="50" readonly></textarea>
                            </td>
                            <td>
                                <form>
                                    <button class="submit-btn" type="submit" onclick='editScript()'>Edit</button>
                                    <script type="text/javascript">
                                        function editScript(){
                                            document.getElementById("cohort-input").readonly = false;
                                        }
                                    </script>
                                </form>
                                <form>
                                    <button class="submit-btn" type="submit">Submit</button>
                                </form>
                            </td>
                        </form>
                    </tr>
                @endfor 
            </tbody>
        </table>
   
</section>
@endsection
