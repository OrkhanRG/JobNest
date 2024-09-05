<div class="app-menu navbar-menu">
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="{{ route('user.index') }}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('assets/admin/images/logo-sm.png') }}" alt="" height="22">
                    </span>
            <span class="logo-lg">
                        <img src="{{ asset('assets/admin/images/logo-dark.png') }}" alt="" height="17">
                    </span>
        </a>
        <!-- Light Logo-->
        <a href="{{ route('user.index') }}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('assets/admin/images/logo-sm.png') }}" alt="" height="22">
                    </span>
            <span class="logo-lg">
                        <img src="{{ asset('assets/admin/images/logo-light.png') }}" alt="" height="17">
                    </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menyu</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link {{ Route::is('user.index') ? "active" : "" }}" href="{{ route('user.index') }}">
                        <i class="ri-dashboard-2-line"></i> <span>Dashboard</span>
                    </a>
                </li>
                @if(isRole('developer'))
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#users" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                            <i class="mdi mdi-account-group"></i> <span>İstifadəçilər</span>
                        </a>
                        <div class="collapse menu-dropdown {{ Route::is('user.users') ? "show" : "" }}" id="users">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="{{ route('user.users') }}" class="nav-link {{ Route::is('user.users') ? "active" : "" }}" data-key="t-analytics"> Bütün istifadəçilər </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endif
            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
