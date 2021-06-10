
<nav class="navbar">
    <div class="logo-image">
        <a class="navbar-brand" href="{{ url('/') }}" alt="Otago Polytechnic Logo">
            <img src="/images/otago-svg-bl.svg">
        </a>
    </div>
    <ul class="nav-menu">
        @guest
            @if (Request::is('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}" alt="Login Link">{{ __('Login') }}</a>
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
                <a href="/students" class="navbar-link" alt="Link to student admin page">Students</a>
            </li>
            <li class="nav-item">
                <a href="/notes" class="navbar-link" alt="Link to student notes page">Notes</a>
            </li>
            <li class="nav-item">
                <a href="/uploads" class="navbar-link" alt="Link to student evidence upload page">Upload Evidence</a>
            </li>
            <li class="nav-item">
                <a href="/cohort" class="navbar-link" alt="Link to studio cohort admin page">Cohort</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}" alt="Link to admin registration page">{{ __('Register') }} New User</a>
            </li>
            <li class="nav-item">
                <a class="navbar-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" alt="Link to logout">
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
