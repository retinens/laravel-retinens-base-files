@php
    $showedTab = '';
@endphp
<ul class="nav flex-column pt-3 pt-md-0 px-4">
    <li class="nav-item">
        <a href="{{ route('admin.index') }}"
           class="d-flex mb-3 align-items-center">
            <h3>
                {{ ucfirst(config('app.name')) }}
            </h3>
        </a>
    </li>
    <h5 class="fw-bold text-gray-200 small nav-link">Menu principal</h5>
    <li class="nav-item {{ request()->routeIs('admin.index') ? 'active' : '' }}">
        <a href="{{ route('admin.index') }}" class="nav-link">
            <span class="sidebar-icon fa-fw fa fa-home"></span>
            <span class="sidebar-text">Tableau de bord</span>
        </a>
    </li>
    <h5 class="fw-bold text-gray-200 small nav-link">Réglages</h5>

    <li class="nav-item">
        <a href="{{ route('admin.admin-users.index') }}" class="nav-link">
            <span class="sidebar-icon fa-fw fa fa-user-cog"></span>
            <span class="sidebar-text">
                Utilisateurs CMS
            </span>
        </a>
    </li>
</ul>
