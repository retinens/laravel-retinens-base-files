<nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
    <div class="container-fluid px-0">
        <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
            <!-- Navbar links -->
            <div class="d-flex align-items-center">
                <div class="d-flex align-items-center">
                    <a href="{{ route('home') }}"><i class="fa fa-eye"></i> Voir le site</a>
{{--                    <livewire:site-search/>--}}
                </div>
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

                        <a class="dropdown-item d-flex align-items-center" href="{{ route('home') }}">
                            <i class="fa fa-eye dropdown-icon me-2"></i>
                            Voir le site
                        </a>

                        <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <form method="POST" id="logout-form" action="{{ route('logout') }}">
                                @csrf
                            </form>
                            <i class="fa fa-sign-out dropdown-icon me-2"></i>
                            {{ __('Déconnexion') }}
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
    <div class="d-block mb-4 mb-md-0">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.index') }}"><i class="fa fa-home"></i> Dashboard</a>
                </li>
                @yield('breadcrumbs')
            </ol>
        </nav>
        @yield('subheader_1')
    </div>
    <div class="col-sm-6 text-end">
        @yield('subheader_2')
    </div>
</div>
