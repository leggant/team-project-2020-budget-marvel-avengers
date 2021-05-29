<!-- Cohort screen-->
@extends('layouts.app')
@section('title')
    Studio Management Portal | Cohort
@endsection
<!-- Form begins-->
@section('content')
    <section class='cohort-screen'>
        <h1>Cohort Assignment</h1>








        <form id="cohort-form" action="{{ route('cohort.store') }}" method='POST'>
            @csrf   
            <div class="form-col">
                <div class="input-group">
                    <select>
                        <option>--- Select Cohort ---</option>
                        @foreach ($cohort as $key => $value)
                            <option value="{{ $value->id }}">{{ $value->studiopaper }} {{ $value->semester }}  </option>
                        @endforeach
                    </select>
                    <input type="text" name="studiopaper" id="studiopaper" placeholder="Studio 1">
                    <input type="text" name="semester" id="semester" placeholder="Semester">
                </div>
            </div>
            <div class="form-col">

                <div class="input-group">

                    <textarea id="students"  name="students" rows="4" cols="50">sdsad</textarea>
                               
   
      
                </div>
            </div>
            <button class="submit-btn" type="submit">Submit</button>
        </form>

        <form action="{{ route('cohort.index') }}" method="get">
                    <select>
                        <option>--- Select Cohort ---</option>
                        @foreach ($cohort as $key => $value)
                            <option value="{{ $value->id }}"> </option>
                            <textarea id="students"  name="" rows="4" cols="50">{{$value->students}}</textarea> 
                        @endforeach
                    </select>
            
        </form>





        <!-- </tbody> -->
        <!-- </table> -->

    </section>
@endsection
