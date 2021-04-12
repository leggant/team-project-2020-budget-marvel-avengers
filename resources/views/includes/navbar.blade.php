<header id="navbar">
    <nav class="navbar-container containerNavbar">
        <a href="/" class="home-link">
            <div class="navbar-logo"></div>
        </a>
        <!-- burger menu-->
        <button type="button" class="navbar-toggle" aria-label="Open navigation menu">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <!-- navigation bar links -->
        <div class="navbar-menu">
            <ul class="navbar-links">
                <li class="navbar-item"><a href="{{ route('pages.index') }}" class="navbar-link">Home</a></li>
                <li class="navbar-item"><a href="{{ route('pages.students') }}" class="navbar-link">Students</a></li>
                <li class="navbar-item"><a href="{{ route('pages.notes') }}" class="navbar-link">Notes</a></li>
                <li class="navbar-item"><a href="{{ route('pages.evidence') }}" class="navbar-link">Upload Evidence</a>
                </li>
                <li class="navbar-item"><a href="{{ route('pages.cohort') }}" class="navbar-link">Cohort</a></li>
            </ul>
        </div>
    </nav>
</header>
