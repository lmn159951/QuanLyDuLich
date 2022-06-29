<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-home"></i>
            <span>Trang quản trị</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Chức năng chính
    </div>

    <li @class([
        'nav-item',
        'active' => request()->routeIs('admin.agencies.*'),
    ])>
        <a class="nav-link" href="{{ route('admin.agencies.index') }}">
            <i class="fas fa-fw fa-building"></i>
            <span>Quản lý đơn vị</span>
        </a>
    </li>

    <li @class([
        'nav-item',
        'active' => request()->routeIs('admin.departments.*'),
    ])>
        <a class="nav-link" href="{{ route('admin.departments.index') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Quản lý phòng ban</span>
        </a>
    </li>

    <li @class([
        'nav-item',
        'active' => request()->routeIs('admin.positions.*'),
    ])>
        <a class="nav-link" href="{{ route('admin.positions.index') }}">
            <i class="fas fa-fw fa-couch"></i>
            <span>Quản lý chức vụ</span>
        </a>
    </li>

    <li @class(['nav-item', 'active' => request()->routeIs('admin.users.*')])>
        <a class="nav-link" href="{{ route('admin.users.index') }}">
            <i class="fas fa-fw fa-user"></i>
            <span>Quản lý nhân viên</span>
        </a>
    </li>

    <li @class(['nav-item', 'active' => request()->routeIs('admin.tours.*')])>
        <a class="nav-link" href="{{ route('admin.tours.index') }}">
            <i class="fas fa-fw fa-bus"></i>
            <span>Quản lý tour</span>
        </a>
    </li>

    <li @class([
        'nav-item',
        'active' => request()->routeIs('admin.supports.*'),
    ])>
        <a class="nav-link" href="{{ route('admin.supports.index') }}">
            <i class="fas fa-fw fa-coins"></i>
            <span>Quản lý kinh phí hỗ trợ</span>
        </a>
    </li>

    <li @class([
        'nav-item',
        'active' => request()->routeIs('admin.tour_registrations.*'),
    ])>
        <a class="nav-link" href="{{ route('admin.tour_registrations.index') }}">
            <i class="fas fa-fw fa-registered"></i>
            <span>Quản lý đăng ký tour</span>
        </a>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="utilities-color.html">Colors</a>
                <a class="collapse-item" href="utilities-border.html">Borders</a>
                <a class="collapse-item" href="utilities-animation.html">Animations</a>
                <a class="collapse-item" href="utilities-other.html">Other</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="login.html">Login</a>
                <a class="collapse-item" href="register.html">Register</a>
                <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item" href="404.html">404 Page</a>
                <a class="collapse-item" href="blank.html">Blank Page</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
