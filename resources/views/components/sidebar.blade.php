<aside class="left-sidebar no-print">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="/dashboard" class="text-nowrap logo-img">
                <img src="{{ asset('assets/images/logos/ddd.png') }}" style="margin-top: 30px" width="120"
                    alt="Logo" />
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Home</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link  @if (request()->is('dashboard*')) active @endif" href="/dashboard"
                        aria-expanded="false">
                        <span>
                            <i class="ti ti-layout-dashboard"></i>
                        </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Pelayanan</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link @if (request()->is('kunjungan*')) active @endif" href="/kunjungan"
                        aria-expanded="false">
                        <span>
                            <i class="ti ti-user"></i>
                        </span>
                        <span class="hide-menu">Kunjungan</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link @if (request()->is('pengaduan*')) active @endif" href="/pengaduan"
                        aria-expanded="false">
                        <span>
                            <i class="ti ti-shopping-cart"></i>
                        </span>
                        <span class="hide-menu">Pengaduan</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link @if (request()->is('survei-kepuasan-masyarakat*')) active @endif"
                        href="/survei-kepuasan-masyarakat" aria-expanded="false">
                        <span>
                            <i class="ti ti-book"></i>
                        </span>
                        <span class="hide-menu">SKM</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Master Data</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link @if (request()->is('unitkerja*')) active @endif" href="/unitkerja"
                        aria-expanded="false">
                        <span>
                            <i class="ti ti-map"></i>
                        </span>
                        <span class="hide-menu">Unit Kerja</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link @if (request()->is('pelayanan*')) active @endif" href="/pelayanan"
                        aria-expanded="false">
                        <span>
                            <i class="ti ti-location"></i>
                        </span>
                        <span class="hide-menu">Pelayanan</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link @if (request()->is('pertanyaan*')) active @endif" href="/pertanyaan"
                        aria-expanded="false">
                        <span>
                            <i class="ti ti-location"></i>
                        </span>
                        <span class="hide-menu">Pertanyaan</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link @if (request()->is('jenis-layanan*')) active @endif" href="/jenis-layanan"
                        aria-expanded="false">
                        <span>
                            <i class="ti ti-location"></i>
                        </span>
                        <span class="hide-menu">Jenis Layanan</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
