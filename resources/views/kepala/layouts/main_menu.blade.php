<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item me-auto"><a class="navbar-brand"
                    href="../../../starter-kit/ltr/vertical-menu-template/"><span class="brand-logo">
                        <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                        </svg></span>
                    <h2 class="brand-text">Menu</h2>
                </a>
            </li>
            <li class="nav-item nav-toggle">
                <a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i
                        class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i
                        class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc"
                        data-ticon="disc"></i>
                </a>
            </li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="nav-item">
                <a class="d-flex align-items-center" href="{{ route('admin') }}"><i data-feather="home"></i><span
                        class="menu-title text-truncate">Dashboard</span></a>
            </li>

            <li class="nav-item">
                <a class="d-flex align-items-center" href="{{ route('admin.ruangan') }}"><i
                        data-feather="codesandbox"></i><span class="menu-title text-truncate">Ruangan</span></a>
            </li>

            <li class=" nav-item">
                <a class="d-flex align-items-center" href="#"><i data-feather="corner-down-right"></i><span
                        class="menu-title text-truncate">Barang Masuk</span></a>
                <ul class="menu-content">
                    <li>
                        <a class="d-flex align-items-center" href="{{ route('admin.masuk.aset.bergerak') }}"><i
                                data-feather="circle"></i><span class="menu-item text-truncate">Aset Bergerak</span></a>
                    </li>
                    <li>
                        <a class="d-flex align-items-center" href="{{ route('admin.masuk.aset.diam') }}"><i
                                data-feather="circle"></i><span class="menu-item text-truncate">Aset Tidak
                                Bergerak</span></a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item">
                <a class="d-flex align-items-center" href="#"><i data-feather="corner-down-left"></i><span
                        class="menu-title text-truncate">Barang Keluar</span></a>
                <ul class="menu-content">
                    <li>
                        <a class="d-flex align-items-center" href="{{ route('admin.keluar.aset.bergerak') }}"><i
                                data-feather="circle"></i><span class="menu-item text-truncate">Aset
                                Bergerak</span></a>
                    </li>
                    <li>
                        <a class="d-flex align-items-center" href="{{ route('admin.keluar.aset.diam') }}"><i
                                data-feather="circle"></i><span class="menu-item text-truncate">Aset Tidak
                                Bergerak</span></a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
