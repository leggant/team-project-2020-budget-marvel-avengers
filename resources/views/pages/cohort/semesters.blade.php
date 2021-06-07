@extends('layouts.app')
@section('title')
    Studio Management Portal | Cohort
@endsection
<!-- Form begins-->
@section('content')
    <section>
        <h1>Students in  {{$cohort->semester}} {{$cohort->year}}</h1>
        @foreach ($cohort->semesters as $value)
        <h1>{{$value->studio}}</h1>
            <p>{{ $value->students }}</p>
            {{-- <a href="{{ route('cohort.edit',$value->id) }}"><button class="btn btn-edit">Edit</button>  --}}
            
        @endforeach

    </section>
@endsection
