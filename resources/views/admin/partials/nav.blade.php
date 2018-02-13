<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">
    <a id="brand" class="navbar-brand" href="{{ route('home') }}">main site</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        {{-- Sidebar --}}
        @include('admin.partials.sidebar')

        {{-- Sidebar toggler --}}
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
        
        {{-- Top navbar --}}
        @include('admin.partials.topbar')

    </div>
</nav>
