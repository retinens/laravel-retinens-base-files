<nav class="navbar navbar-top navbar-expand navbar-dashboard bg-white px-4 py-2">
    <div class="container-fluid px-0">
        <div class="d-flex justify-content-between align-items-center w-100" id="navbarSupportedContent">
            <div>
                <form class="navbar-search form-inline" id="navbar-search-main">
                    <div class="input-group input-group-merge search-bar ">
                        <span class="input-group-text border-0 bg-gray-100 " id="topbar-addon">
                            <span class="fas fa-search"></span>
                        </span>
                        <input type="text" class="form-control border-0 bg-gray-100" data-bs-toggle="tooltip" data-bs-title="Bientôt disponible" disabled id="topbarInputIconLeft" placeholder="Rechercher" aria-label="Search" aria-describedby="topbar-addon">
                    </div>
                </form>
            </div>
                <ul class="navbar-nav align-items-center">
                <li class="nav-item dropdown ms-lg-3">
                    <a class="nav-link dropdown-toggle pt-1 px-0" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        <div class="media d-flex align-items-center">
                            <img class="avatar rounded-circle"
                                 src="{{ Auth::user()->avatar_url }}"
                                 alt="{{ Auth::user()->full_name }}">
                            <div class="media-body ms-2 text-dark align-items-center d-none d-lg-block">
                                <span class="mb-0 font-small fw-bold text-gray-900">{{ Auth::user()->full_name }}</span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-1">
                        <p class=" p-2 pb-0  mb-0 small">
                            Vous avez le rôle: <strong class="fw-bold">{{ Auth::user()->roles?->first()?->name }}</strong>
                        </p>
                        <a class="dropdown-item d-flex align-items-center text-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <form method="POST" id="logout-form" action="{{ route('logout') }}">
                                @csrf
                            </form>
                            <i class="fa fa-sign-out dropdown-icon me-2"></i>
                            {{ __('Déconnexion') }}
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="{{ route('home') }}">
                            <i class="fa fa-eye dropdown-icon me-2"></i>
                            Voir le site
                        </a>

                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center p-4">
    <div class="d-block mb-4 mb-md-0">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb fw-bold bg-transparent">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.index') }}" class="fw-bold "> Tableau de bord</a>
                </li>
                @yield('breadcrumbs')
            </ol>
        </nav>
        @yield('subheader_1')
    </div>
    <div class="col-sm-6 text-end">
        @yield('subheader_2')
        <a href="{{ route('home') }}"
           class="btn btn-dark  text-white fw-bold" style="background-color:#06223B">
            <i class="fa fa-eye text-primary"></i>
            Visiter le site
        </a>
    </div>
</div>
