<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <a class="navbar-brand" href="{{ url('/') }}">
        <div class="logo-image">
            <img src="/images/logo.jpg">
        </div>
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        {{-- <ul class="navbar-nav mr-auto">
            
        </ul> --}}
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto nav-menu">
            <!-- Authentication Links -->
            @guest
                {{-- @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif --}}

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @endguest
            @auth
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
                </li>
                <li class="nav-item">
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="/students" class="navbar-link">Students</a>
                </li>
                <li class="nav-item">
                    <a href="/notes" class="navbar-link">Notes</a>
                </li>
                <li class="nav-item">
                    <a href="/uploads" class="navbar-link">Upload Evidence</a>
                </li>
                <li class="nav-item">
                    <a href="/cohort" class="navbar-link">Cohort</a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            @endauth
        </ul>
    </div>
</nav>
