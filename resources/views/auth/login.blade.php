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
        <div class="login-form">
        <form method="POST" action="{{ route('login') }}" class="login">
            @csrf
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="submit-btn">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="submit-btn" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
        </form>
        </div>
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
