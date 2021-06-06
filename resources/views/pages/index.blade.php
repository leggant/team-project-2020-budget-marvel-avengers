@extends('layouts.app')

@section('content')
<div class="hero home">
<div class="container">
	<div class="posts">

	  <div class="post">
		<div class="col-lg-3 stats">
			<i class="fa fa-check" aria-hidden="true"></i>
			<div class="counting" data-count="{{$note}}">0</div>
			<h5>Projects done</h5>
		</div>
	  </div>

	  <div class="post">
		<div class="col-lg-3 stats">
			<i class="fa fa-coffee" aria-hidden="true"></i>
			<div class="counting" data-count="{{$cohort}}">0</div>
			<h5>Cups of coffee</h5>
		</div>
		  
	  </div>
	  <div class="post">
		  <div class="col-lg-3 stats">
		<i class="fa fa-code" aria-hidden="true"></i>
		<div class="counting" data-count="{{$student}}">0</div>
		<h5>Lines of code</h5>
	</div></div>


	  <div class="post">
		  <div class="col-lg-3 stats">
				<i class="fa fa-coffee" aria-hidden="true"></i>
				<div class="counting" data-count="{{$upload}}">0</div>
				<h5>Cups of coffee</h5>
			</div></div> 
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