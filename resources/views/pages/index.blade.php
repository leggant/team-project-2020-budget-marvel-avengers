@extends('layouts.app')

@section('content')
    <div class="hero home">
        <div class="cards-list">
            <div class="card" onclick="window.location='{{ route('students.index') }}'">
                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                <h5>Students</h5>
                <div class="counting" data-count="{{ $student }}">0</div>
            </div>
            <div class="card" onclick="window.location='{{ route('notes.index') }}'">
                <i class="far fa-edit"></i>
                <h5>Notes</h5>
                <div class="counting" data-count="{{ $note }}">0</div>
            </div>
            <div class="card" onclick="window.location='{{ route('uploads.index') }}'">
                <i class="fas fa-cloud-upload-alt"></i>
                <h5>Uploads</h5>
                <div class="counting" data-count="{{ $upload }}">0</div>
            </div>
            <div class="card" onclick="window.location='{{ route('cohort.index') }}'">
                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                <h5>Cohorts</h5>
                <div class="counting" data-count="{{ $cohort }}">0</div>
            </div>
        </div>
        <div class="homepage-carousel">
            <div class="owl-carousel owl-theme">
                <div class="item"><img
                        src="https://www.op.ac.nz/assets/Campaign2020/Study-For-Free-Homepage-Banner-v2__FillWzk0OCw1MzRd.jpg"
                        alt="">
                </div>
                <div class="item"><img
                        src="https://archipro.co.nz/assets/photos/Otago-Polytechnic-Forth-Street-Mason--Wales-Architects-16204__ListingLargeW10.JPG?1"
                        alt="">
                </div>
                <div class="item"><img src="/images/slideshow/img-1.jpg" alt=""></div>
                <div class="item"><img src="/images/slideshow/img-2.jpg" alt=""></div>
            </div>
        </div>
    </div>
@endsection
