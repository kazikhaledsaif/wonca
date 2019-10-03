<!--Navbar Start-->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <!-- LOGO -->
        <a class="navbar-brand logo" href="{{ route('frontend.index') }}">
            <img src="{{ asset('frontend/img/logo3.png') }}" alt="wonca" />
        </a>
        <a class="navbar-brand logo HideScroll" href="{{ route('frontend.index') }}">
            <img src="{{ asset('frontend/img/logo3.png') }}" alt="wrhc2020" />
        </a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="{{ route('frontend.index') }}" class="nav-link" data-scroll-nav="0">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('abstract.frontend') }}" class="nav-link" >Abstract Submission</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('workshop.frontend') }}" class="nav-link" >Workshop & Scientific Paper</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" data-scroll-nav="3">schedule</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" data-scroll-nav="4">speakers</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link" data-scroll-nav="7">Login</a>
                </li>
            </ul>
            <ul class="navbar-nav get_tickets">
                <li><a href="{{ route('frontend.registration') }}">Registration </a></li>
            </ul>
        </div>
    </div>
</nav>
<!--Navbar End-->
