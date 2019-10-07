<ul class="sidebar navbar-nav">
    <li class="nav-item ">
        <a class="nav-link" href="{{ route('backend.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('backend.registered-user')}}">
            <i class="fas fa-fw fa-address-book"></i>
            <span>Registered User</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('backend.abstract-submitted')}}">
            <i class="fas fa-fw fa-certificate"></i>
            <span>Abstract Submitted</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('backend.workshop')}}">
            <i class="fas fa-fw fa-book-reader"></i>
            <span>Workshop</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('backend.subscriber')}}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Subscriber</span></a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-user"></i>
            <span>Speakers</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(5px, 56px, 0px);">

            <a class="dropdown-item" href="{{route('backend.speeches')}}">All Speakers</a>
            <a class="dropdown-item" href="{{route('backend.speech.create')}}">Add New Speaker</a>
        </div>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-sliders-h"></i>
            <span>Sliders</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(5px, 56px, 0px);">

            <a class="dropdown-item" href="{{route('backend.sliders')}}">All Sliders</a>
            <a class="dropdown-item" href="{{route('backend.slider.create')}}">Add New Slider</a>
        </div>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-calendar-alt"></i>
            <span>Important Dates</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(5px, 56px, 0px);">

            <a class="dropdown-item" href="{{route('backend.dates')}}">All Important Dates</a>
            <a class="dropdown-item" href="{{route('backend.date.create')}}">Add New  Date</a>
        </div>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-calendar-day"></i>
            <span>Schedules</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(5px, 56px, 0px);">

            <a class="dropdown-item" href="{{route('backend.schedules')}}">All Schedules</a>
            <a class="dropdown-item" href="{{route('backend.schedule.create')}}">Add New Schedule</a>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link"  href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-fw fa-times-circle"></i>
            <span>Logout</span></a>
    </li>
</ul>
