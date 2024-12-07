<ul class="nav flex-column pt-3 pt-md-0">
    <li class="nav-item">
        <a href="{{ route('admin.index') }}" class="d-flex mb-3 align-items-center">
            <span class="mt-1 mx-1 h4">
            Admin {{ config('app.name') }}
            </span>
        </a>
    </li>
    <li class="nav-item {{ request()->routeIs('admin.index') ? 'active' : '' }}">
        <a href="{{ route('admin.index') }}" class="nav-link">
            <span class="sidebar-icon fa-fw fa fa-home"></span>
            <span class="sidebar-text">{{ __('Dashboard') }}</span>
        </a>
    </li>
    <hr>
    <li class="nav-item">
        <a href="{{ route('admin.admin-users.index') }}" class="nav-link">
            <span class="sidebar-icon fa-fw fa fa-user-cog"></span>
            <span class="sidebar-text">
                Utilisateurs CMS
            </span>
        </a>
    </li>
</ul>
