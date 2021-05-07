<nav class="navbar">
    <a class="navbar-brand" href="{{ route('pages.index') }}">
        <div class="logo-image">
              <img src="/images/logo.jpg">
        </div>
    </a>
    <ul class="nav-menu">
        <li class="nav-item">
            <a href="{{ route('pages.index') }}" class="navbar-link">Home</a></li>
        <li class="nav-item">
            <a href="{{ route('pages.students') }}" class="navbar-link">Students</a></li>
        <li class="nav-item">
            <a href="{{ route('pages.notes') }}" class="navbar-link">Notes</a></li>
        <li class="nav-item">
            <!-- <li class="navbar-item"><a href="" class="navbar-link">Upload Evidence</a> -->
            <li class="navbar-item"><a href="/uploads" class="navbar-link">Upload Evidence</a>
        <li class="nav-item">
            <li class="navbar-item"><a href="{{ route('pages.cohort') }}" class="navbar-link">Cohort</a></li>
    </ul>
    <div class="hamburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>
</nav>