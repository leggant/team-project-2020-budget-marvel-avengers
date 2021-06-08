@extends('layouts.app')
@section('title')
    Studio Management Portal | Cohort
@endsection
<!-- Form begins-->
@section('content')
    <section>
        <h1>Students</h1>
        @foreach ($cohort->semesters as $value)
            <p>{{ $value->students }}</p>
            {{-- <a href="{{ route('cohort.edit',$value->id) }}"><button class="btn btn-edit">Edit</button>  --}}
            
        @endforeach
    </section>
@endsection
