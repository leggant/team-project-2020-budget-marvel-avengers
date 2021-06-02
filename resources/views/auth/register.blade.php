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
                <form method="POST" action="{{ route('register') }}" class="login">
                    @csrf
                    <label for="name">{{ __('Name') }}</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback error" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <label for="email" class="">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback error" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <label for="password">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback error" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                        autocomplete="new-password">
                    <button type="submit" class="submit-btn">
                        {{ __('Register') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
  
@endsection