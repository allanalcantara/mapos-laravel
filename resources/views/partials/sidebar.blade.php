<nav id="sidebarMenu" class="sidebar d-md-block bg-light collapse" data-simplebar>
    <div class="sidebar-inner pt-3">
        <a href="{{ url('/') }}" class="brand"><img src="{{ url('img/logo.png') }}"></a>
        <ul class="nav flex-column">
            <li class="nav-item {{ Request::segment(1) == '' ? 'active' : '' }}"><a href="{{ url('/') }}" class="nav-link"><span class="sidebar-icon"><span class="fas fa-tv"></span></span> <span>Dashboard</span></a></li>
            <li class="nav-item {{ Request::segment(1) == 'customers' ? 'active' : '' }}"><a href="{{ url('customers') }}" class="nav-link"><span class="sidebar-icon"><span class="fas fa-star"></span></span> <span>{{ __('messages.customers') }}</span></a></li>
            <li class="nav-item {{ Request::segment(1) == 'services' ? 'active' : '' }}"><a href="{{ url('services') }}" class="nav-link"><span class="sidebar-icon"><span class="fas fa-cog"></span></span> <span>{{ __('messages.services') }}</span></a></li>
            <li class="nav-item {{ Request::segment(1) == 'products' ? 'active' : '' }}"><a href="{{ url('products') }}" class="nav-link"><span class="sidebar-icon"><span class="fas fa-box"></span></span> <span>{{ __('messages.products') }}</span></a></li>
            <li class="nav-item"><span class="nav-link collapsed d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#submenu-app"><span><span class="sidebar-icon"><span class="fas fa-table"></span></span> Tables </span><span class="link-arrow"><span class="fas fa-chevron-right"></span></span></span>
                <div class="multi-level collapse" role="list" id="submenu-app" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item"><a class="nav-link" href="../pages/tables/bootstrap-tables.html"><span>Bootstrap Tables</span></a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item"><span class="nav-link collapsed d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#submenu-pages"><span><span class="sidebar-icon"><span class="far fa-file-alt"></span></span> Page examples </span><span class="link-arrow"><span class="fas fa-chevron-right"></span></span></span>
                <div class="multi-level collapse" role="list" id="submenu-pages" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item"><a class="nav-link" href="../pages/examples/sign-in.html"><span>Sign In</span></a></li>
                        <li class="nav-item"><a class="nav-link" href="../pages/examples/sign-up.html"><span>Sign Up</span></a></li>
                        <li class="nav-item"><a class="nav-link" href="../pages/examples/forgot-password.html"><span>Forgot password</span></a></li>
                        <li class="nav-item"><a class="nav-link" href="../pages/examples/reset-password.html"><span>Reset password</span></a></li>
                        <li class="nav-item"><a class="nav-link" href="../pages/examples/lock.html"><span>Lock</span></a></li>
                        <li class="nav-item"><a class="nav-link" href="../pages/examples/404.html"><span>404 Not Found</span></a></li>
                        <li class="nav-item"><a class="nav-link" href="../pages/examples/500.html"><span>500 Server Error</span></a></li>
                    </ul>
                </div>
            </li>

        </ul>
    </div>
</nav>
