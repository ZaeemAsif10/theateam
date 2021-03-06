<nav id="nav" class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="{{ route('team') }}">
        <img src="{{ asset('public/assets/images/A-team.png') }}" class="img-fluid logo" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav m-auto">
            <li class="{{ Route::is('team') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('team') }}">HOME</a>
            </li>
            <li class="{{ Route::is('about') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('about') }}">ABOUT US</a>
            </li>


            <li class="nav-item dropdown" id="myDIV">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">
                    PROJECTS
                </a>
                <div class="dropdown-menu" id="projectMenu">
                    @php
                        $navbars = App\Models\Project::all();
                    @endphp
                    @foreach ($navbars as $navbarItem)
                        <a class="dropdown-item"
                            href="{{ url('projects/' . $navbarItem->id) }}">{{ $navbarItem->name }}</a>
                    @endforeach
                    <a class="dropdown-item"
                        href="{{ url('http://www.aljalildevelopers.com/vtour/ano.html') }}">VIRTUAL TOUR</a>
                </div>
            </li>



            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarMediaDropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">
                    MEDIA
                </a>
                <div class="dropdown-menu" id="mediaMenu">
                    <a class="dropdown-item" href="{{ route('blog') }}">BLOG</a>
                    <a class="dropdown-item" href="{{ route('news') }}">NEWS</a>
                </div>
            </li>
            <li class="{{ Route::is('gallery') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('gallery') }}">GELLERY</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarMediaDropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">
                    EVENTS
                </a>
                <div class="dropdown-menu" id="mediaMenu">
                    @php
                        $events = App\Models\Event::all();
                    @endphp
                    @foreach ($events as $event)
                        <a class="dropdown-item" href="{{ url('events/' . $event->id) }}">{{ $event->name }}</a>
                    @endforeach
                </div>
            </li>
            <li class="{{ Route::is('contact') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('contact') }}">CONTACT US</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <a href="tel:03413333301" class="btn btn-default btn-phone" type="submit">
                <i class="fa fa-phone" aria-hidden="true"></i>
                03413333301
            </a>
        </form>
    </div>
</nav>
