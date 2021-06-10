
<nav class="navbar">
    <div class="logo-image">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="/images/otago-svg-bl.svg">
        </a>
    </div>
    <ul class="nav-menu">
        @guest
            @if (Request::is('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif
        @endguest
        @auth
            <li class="nav-item">
                <p class="nav-link">
                    {{ Auth::user()->name }}
                </p>
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
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }} New User</a>
            </li>
            <li class="nav-item">
                <a class="navbar-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        @endauth
    </ul>
    </div>
</nav>
