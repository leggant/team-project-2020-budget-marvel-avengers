@extends('layouts.app')
@section('content')
<section
<div class="homepageCarousel">
  <div class="owl-carousel owl-theme mt-5">
    <div class="item"><img src="https://www.op.ac.nz/assets/Campaign2020/Study-For-Free-Homepage-Banner-v2__FillWzk0OCw1MzRd.jpg" alt=""></div>
    <div class="item"><img src="https://archipro.co.nz/assets/photos/Otago-Polytechnic-Forth-Street-Mason--Wales-Architects-16204__ListingLargeW10.JPG?1" alt=""></div>
</div>
</div>
    
<script>
        jQuery(document).ready(function($){
          $('.owl-carousel').owlCarousel({
            loop:true,
            center: true,
            margin:10,
            autoplay:true,
            autoplayTimeout:2000,
            autoplayHoverPause:true,
            nav:true,
            items:1,
          })
        })
        </script>
</section>
@endsection