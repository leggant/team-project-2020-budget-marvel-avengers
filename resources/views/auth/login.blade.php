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

                    <label for="email" class="">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" required autocomplete="email" autofocus
                        placeholder="Enter Email Address.....">
                    @error('email')
                        <span class="invalid-feedback error" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <label for="password">{{ __('Password') }}</label>
                    <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password"
                        required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback error" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="remember">
                        <button type="submit" class="submit-btn">
                            {{ __('Login') }}
                        </button>
                        <label for="remember">
                            {{ __('Remember Me') }}
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        </label>
                    </div>
                    <div class="remember">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        jQuery(document).ready(function($) {
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
