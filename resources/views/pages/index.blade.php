@extends('layouts.app')

@section('content')
    <div class="hero home">
			<div class="cards-list">
				<div class="card 1"onclick="window.location='{{ route("students.index") }}'">
				  <div class="card_image"> <img src="https://i.pinimg.com/originals/71/bb/0e/71bb0e37993079883f76131592a4cb50.gif"/></div>
				  <div class="card_title title-white">
					<div class="tile-col">
                        <div class="counting" data-count="{{ $student }}">0</div>
                        <h5>Students</h5>
                    </div>
				  </div>
				</div>
				
				  <div class="card 2"onclick="window.location='{{ route("notes.index") }}'">
				  <div class="card_image"> <img src="https://i.pinimg.com/originals/71/bb/0e/71bb0e37993079883f76131592a4cb50.gif"/></div>
				  <div class="card_title title-white">
					<div class="tile-col">
                        <div class="counting" data-count="{{ $note }}">0</div>
                        <h5>Notes</h5>
                    </div>
				  </div>
				</div>
				
				<div class="card 3" onclick="window.location='{{ route("uploads.index") }}'">
				  <div class="card_image"> <img src="https://i.pinimg.com/originals/71/bb/0e/71bb0e37993079883f76131592a4cb50.gif"/></div>
				  <div class="card_title title-white">
					<div class="tile-col">
                        <div class="counting" data-count="{{ $upload }}">0</div>
                        <h5>Uploads</h5>
                    </div>
				  </div>
				</div>
				  
				  <div class="card 4" onclick="window.location='{{ route("cohort.index") }}'">
				  <div class="card_image"> <img src="https://i.pinimg.com/originals/71/bb/0e/71bb0e37993079883f76131592a4cb50.gif"/></div>
				  <div class="card_title title-white">
					<div class="tile-col">
                        <div class="counting" data-count="{{ $cohort }}">0</div>
                        <h5>Cohorts</h5>
                    </div>
				  </div>
				  </div>
				
				</div>




        <!-- end cont stats -->
        <div class="homepage-carousel">
            <div class="owl-carousel owl-theme">
                <div class="item"><img
                        src="https://www.op.ac.nz/assets/Campaign2020/Study-For-Free-Homepage-Banner-v2__FillWzk0OCw1MzRd.jpg"
                        alt="" >
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
