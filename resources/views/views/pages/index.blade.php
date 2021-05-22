@extends('layouts.app')
@section('content')

<div class="hero home">
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
    <div class="login-form">
        <form class="login">
            <label for="useremail">Login Email</label>
            <input type="email" name="useremail" id="useremail" require placeholder="Enter Email">
            <label for="userpassword">Login Password</label>
            <input type="password" name="userpassword" id="userpassword" require>
            <input type="submit" value="Login" class="submit-btn">
        </form>
    </div>
</div>
<script>
    jQuery(document).ready(function ($) {
        $('.owl-carousel').owlCarousel({
            loop: true,
            center: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            nav: true,
            items: 1,
            dots: false,
        })
    })

</script>

@endsection
