@extends('layouts.app')

@section('content')
    <div class="hero home">
			<div class="cards-list">
				<div class="card 1">
				  <div class="card_image"onclick="window.location='{{ route("students.index") }}'"> <img src="https://i.redd.it/b3esnz5ra34y.jpg" /> </div>
				  <div class="card_title title-white">
					<div class="tile-col">
                        <div class="counting" data-count="{{ $student }}">0</div>
                        <h5> students</h5>
                    </div>
				  </div>
				</div>
				
				  <div class="card 2">
				  <div class="card_image">
					</div>
				  <div class="card_title title-white">
					<div class="tile-col">
                        <div class="counting" data-count="{{ $note }}">0</div>
                        <h5> Notes</h5>
                    </div>
				  </div>
				</div>
				
				<div class="card 3">
				  <div class="card_image">
				  </div>
				  <div class="card_title title-white">
					<div class="tile-col">
                        <div class="counting" data-count="{{ $upload }}">0</div>
                        <h5> Uploads</h5>
                    </div>
				  </div>
				</div>
				  
				  <div class="card 4">
				  <div class="card_image">
					<img src="https://media.giphy.com/media/LwIyvaNcnzsD6/giphy.gif" />
					</div>
				  <div class="card_title title-white">
					<div class="tile-col">
                        <div class="counting" data-count="{{ $cohort }}">0</div>
                        <h5> Cohort</h5>
                    </div>
				  </div>
				  </div>
				
				</div>




        <!-- end cont stats -->
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
