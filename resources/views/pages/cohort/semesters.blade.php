@extends('layouts.app')
@section('title')
    Studio Management Portal | Cohort
@endsection
<!-- Form begins-->
@section('content')
    <section>
        <h1>Students in {{$cohort->year}}</h1>
        @foreach ($cohort->semesters as $value)
        <h1>{{$value->studio}}</h1>
            <p>{{ $value->students }}</p>
        @endforeach
    </section>
@endsection
