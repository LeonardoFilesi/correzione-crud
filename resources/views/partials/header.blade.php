<header id="header">
    <div class="container d-flex justify-content-between align-items-center">
        <img src="{{ Vite::asset('resources/img/dc_comics.png') }}" alt="DC Comics" style="width: 300px">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dccomics.index') }}">Admin</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

</header>