<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#"><img src="{{ asset('botanika/img/botanika_white.png') }}"alt="Logo"></a>
                {{-- <a class="navbar-brand hidden mb-4" href="./"><img src="{{ asset('botanika/img/botanika_white.png') }}" alt="Logo"></a> --}}
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="/admin/home"> <i class="menu-icon fa fa-dashboard"></i>Home</a>
                    </li>
                    <li class="active">
                        <a href="/admin/event"> <i class="menu-icon fa fa-align-left"></i>Event</a>
                    </li>
                    <li class="active">
                        <a href="/admin/menu"> <i class="menu-icon fa fa-shopping-cart"></i>Menu</a>
                    </li>
                    <li class="active">
                        <a href="/admin/category"> <i class="menu-icon fa fa-archive"></i>Kategori</a>
                    </li>
                </ul>
            </div>
        </nav>
    </aside>