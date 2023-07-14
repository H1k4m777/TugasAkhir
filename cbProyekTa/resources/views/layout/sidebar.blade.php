<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fa-solid fa-laptop"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Rekomendasi Laptop</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Nav Item - Input -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('input') }}">
            <i class="fa-solid fa-square-poll-horizontal"></i>
            <span>Input</span></a>
    </li>

    <!-- Nav Item - table -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('rules') }}">
            <i class="fa-solid fa-table"></i>
            <span>Rules</span></a>
    </li>

    <!-- Nav Item - param -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('kategori') }}">
            <i class="fa-solid fa-chart-column"></i>
            <span>Keanggotaan</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>