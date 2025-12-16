    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3" style="background:#184D2B">
        <div class="container-fluid">

            <a class="navbar-brand" href="/">
            <img src="{{ asset('botanika/img/botanika_white.png') }}"
                alt="" height="24" class="d-inline-block align-text-top">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                    aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item fs-5">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                    </li>

                    <li class="nav-item fs-5">
                        <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">About Us</a>
                    </li>

                    <li class="nav-item fs-5">
                        <a class="nav-link {{ Request::is('menu') ? 'active' : '' }}" href="/menu">Menu</a>
                    </li>

                    <li class="nav-item fs-5">
                        <a class="nav-link {{ Request::is('event') ? 'active' : '' }}" href="/event">Event</a>
                    </li>

                    {{-- <li class="nav-item fs-5">
                        <a class="nav-link {{ Request::is('store') ? 'active' : '' }}" href="/store">Store</a>
                    </li> --}}

                    {{-- <li class="nav-item fs-5">
                        <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="/contact">Contact</a>
                    </li> --}}
                </ul>
            </div>
        </div>
    </nav>