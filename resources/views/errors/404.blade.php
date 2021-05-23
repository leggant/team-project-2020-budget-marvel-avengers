@extends('layouts.app')

@section('title')
    Studio Management Portal | Error 404
@endsection

@section('content')
<section id="404">
    <header>
        <h1>{{ $exception->getMessage() }}</h1>
    </header>
</section>
@endsection