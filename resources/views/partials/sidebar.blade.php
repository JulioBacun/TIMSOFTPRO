<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-text mx-3">SMA Budya Wacana Yogyakarta</div>
    </a>

    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-cogs"></i>
            <span>Pendeteksi Emosi</span>
        </a>
    </li>

<!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Analisis Text</span>
            </a>
        </li>

            <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('riwayat_deteksi') }}">
                <i class="fas fa-fw fa-folder"></i>
                <span>Riwayat Deteksi Emosi</span>
            </a>
        </li>

            <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('daftar_emosi') }}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Daftar Emosi</span></a>
        </li>


    <hr class="sidebar-divider d-none d-md-block">
</ul>
