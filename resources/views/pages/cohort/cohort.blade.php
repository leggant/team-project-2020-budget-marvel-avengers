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
                    <option value="{{ $key }}">{{ $value->cohort}}</option>
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
                @foreach ($cohort as $key => $value)
              
                    <tr>
                        <form id="cohort-screenx" method="get" action="">
                            <td>
                                <div id="studio-paper">Studio 1</div>
                            </td>
                            <td>
                                <textarea id="cohort-input2" readonly="readonly" name="cohort-review" rows="4" cols="50" >{{ $value->names}}</textarea>
                            </td>
                            <td>
                            <form>
                                <button class="submit-btn" type="button" onclick='ToggleReadOnlyState()'>Edit</button>
                                    <script type="text/javascript">
                                        function ToggleReadOnlyState () {
                                        var textarea2 = document.getElementById ("cohort-input2");
                                        textarea2.readOnly = !textarea2.readOnly;
                                    }
                                    </script>
                                </form>
                                <form>
                                    <button class="submit-btn" type="submit">Submit</button>
                                </form>
                            </td>
                            </tr>
                            <tr>
                                <form id="cohort-screenx" method="get" action="">
                                    <td>
                                        <div id="studio-paper">Studio 2</div>
                                    </td>
                                    <td>
                                        <textarea id="cohort-input1" readonly="readonly" name="cohort-review1" rows="4" cols="50" >{{ $value->names}}</textarea>
                                    </td>
                                    <td>
                                    <form>
                                        <button class="submit-btn1" type="button" onclick='ToggleReadOnlyState1()'>Edit</button>
                                            <script type="text/javascript">
                                                function ToggleReadOnlyState1 () {
                                                var textarea1 = document.getElementById ("cohort-input1");
                                                textarea1.readOnly = !textarea1.readOnly;
                                            }
                                            </script>
                                        </form>
                                        <form>
                                            <button class="submit-btn" type="submit">Submit</button>
                                        </form>
                                    </td>
                                    </tr>
                                    <tr>
                                        <form id="cohort-screenx" method="get" action="">
                                            <td>
                                                <div id="studio-paper">Studio 3</div>
                                            </td>
                                            <td>
                                                <textarea id="cohort-input1" readonly="readonly" name="cohort-review1" rows="4" cols="50" >{{ $value->names}}</textarea>
                                            </td>
                                            <td>
                                            <form>
                                                <button class="submit-btn1" type="button" onclick='ToggleReadOnlyState1()'>Edit</button>
                                                    <script type="text/javascript">
                                                        function ToggleReadOnlyState1 () {
                                                        var textarea1 = document.getElementById ("cohort-input1");
                                                        textarea1.readOnly = !textarea1.readOnly;
                                                    }
                                                    </script>
                                                </form>
                                                <form>
                                                    <button class="submit-btn" type="submit">Submit</button>
                                                </form>
                                            </td>
                                            </tr>
                                            <tr>
                                                <form id="cohort-screenx" method="get" action="">
                                                    <td>
                                                        <div id="studio-paper">Studio 4</div>
                                                    </td>
                                                    <td>
                                                        <textarea id="cohort-input1" readonly="readonly" name="cohort-review1" rows="4" cols="50" >{{ $value->names}}</textarea>
                                                    </td>
                                                    <td>
                                                    <form>
                                                        <button class="submit-btn1" type="button" onclick='ToggleReadOnlyState1()'>Edit</button>
                                                            <script type="text/javascript">
                                                                function ToggleReadOnlyState1 () {
                                                                var textarea1 = document.getElementById ("cohort-input1");
                                                                textarea1.readOnly = !textarea1.readOnly;
                                                            }
                                                            </script>
                                                        </form>
                                                        <form>
                                                            <button class="submit-btn" type="submit">Submit</button>
                                                        </form>
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                        <form id="cohort-screenx" method="get" action="">
                                                            <td>
                                                                <div id="studio-paper">Studio 5</div>
                                                            </td>
                                                            <td>
                                                                <textarea id="cohort-input1" readonly="readonly" name="cohort-review1" rows="4" cols="50" >{{ $value->names}}</textarea>
                                                            </td>
                                                            <td>
                                                            <form>
                                                                <button class="submit-btn1" type="button" onclick='ToggleReadOnlyState1()'>Edit</button>
                                                                    <script type="text/javascript">
                                                                        function ToggleReadOnlyState1 () {
                                                                        var textarea1 = document.getElementById ("cohort-input1");
                                                                        textarea1.readOnly = !textarea1.readOnly;
                                                                    }
                                                                    </script>
                                                                </form>
                                                                <form>
                                                                    <button class="submit-btn" type="submit">Submit</button>
                                                                </form>
                                                            </td>
                                                            </tr>
                                                            <tr>
                                                                <form id="cohort-screenx" method="get" action="">
                                                                    <td>
                                                                        <div id="studio-paper">Studio 6</div>
                                                                    </td>
                                                                    <td>
                                                                        <textarea id="cohort-input1" readonly="readonly" name="cohort-review1" rows="4" cols="50" >{{ $value->names}}</textarea>
                                                                    </td>
                                                                    <td>
                                                                    <form>
                                                                        <button class="submit-btn1" type="button" onclick='ToggleReadOnlyState1()'>Edit</button>
                                                                            <script type="text/javascript">
                                                                                function ToggleReadOnlyState1 () {
                                                                                var textarea1 = document.getElementById ("cohort-input1");
                                                                                textarea1.readOnly = !textarea1.readOnly;
                                                                            }
                                                                            </script>
                                                                        </form>
                                                                        <form>
                                                                            <button class="submit-btn" type="submit">Submit</button>
                                                                        </form>
                                                                    </td>
                                                                    </tr>
                              
                            @endforeach

            </tbody>
        </table>
   
</section>
@endsection
