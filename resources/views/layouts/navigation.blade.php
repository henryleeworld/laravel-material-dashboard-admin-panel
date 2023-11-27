<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0 d-flex text-wrap align-items-center" href="#">
            <img src="{{ asset('img/logo-ct.png') }}" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-2 font-weight-bold text-white">{{ trans('panel.site_title') }}</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse w-auto max-height-vh-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->is('admin') ? 'active bg-gradient-primary' : '' }}" href="{{ route('admin.home') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1.2rem;" class="fas fa-fw fa-tachometer-alt text-center"></i>
                    </div>
                    <span class="nav-link-text ms-1">{{ __('Dashboard') }}</span>
                </a>
            </li>
            @can('user_management_access')
            <li class="nav-item has-treeview">
                <a class="nav-link text-white {{ request()->is('admin/permissions*') || request()->is('admin/roles*')  || request()->is('admin/users*') ? 'active bg-gradient-primary' : '' }}" data-bs-toggle="collapse" aria-expanded="true" href="#user_management">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1rem;" class="fa-fw fas fa-users ps-2 pe-2 text-center"></i>
                    </div>
                    <span class="nav-link-text ms-1">{{ trans('cruds.user_management.title') }}</span>
                </a>
                <div class="collapse show" id="user_management">
                    <ul class="navbar-nav">
                        @can('permission_access')
                        <li class="nav-item">
                            <a class="nav-link text-white {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active bg-gradient-primary' : '' }}" href="{{ route("admin.permissions.index") }}">
                                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                    <i style="font-size: 1rem;" class="fa-fw fas fa-unlock-alt ps-2 pe-2 text-center"></i>
                                </div>
                                <span class="nav-link-text ms-1">{{ trans('cruds.permission.title') }}</span>
                            </a>
                        </li>
                        @endcan
                        @can('role_access')
                        <li class="nav-item">
                            <a class="nav-link text-white {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active bg-gradient-primary' : '' }}" href="{{ route("admin.roles.index") }}">
                                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                    <i style="font-size: 1rem;" class="fa-fw fas fa-briefcase ps-2 pe-2 text-center"></i>
                                </div>
                                <span class="nav-link-text ms-1">{{ trans('cruds.role.title') }}</span>
                            </a>
                        </li>
                        @endcan
                        @can('user_access')
                        <li class="nav-item">
                            <a class="nav-link text-white {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active bg-gradient-primary' : '' }}" href="{{ route("admin.users.index") }}">
                                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                    <i style="font-size: 1rem;" class="fa-fw fas fa-user ps-2 pe-2 text-center"></i>
                                </div>
                                <span class="nav-link-text ms-1">{{ trans('cruds.user.title') }}</span>
                            </a>
                        </li>
                        @endcan
                    </ul>
                </div>
            </li>
            @endcan
        </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
    </div>
</aside>
