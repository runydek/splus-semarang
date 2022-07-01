<div id="app">
    <div id="sidebar" class="active">
        <div class="sidebar-wrapper active">
            <div class="sidebar-header">
                <div class="d-flex justify-content-between">
                    <div class="logo">
                        <a href="index.html">S-Plus SMRNG</a>
                    </div>
                    <div class="toggler">
                        <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                    </div>
                </div>
            </div>
            <div class="sidebar-menu">
                <ul class="menu">
                    <li class="sidebar-item">
                        <a href="/" class='sidebar-link'>
                            <i class="bi bi-grid-fill"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-item  has-sub">
                        <a href="#" class="sidebar-link">
                            <i class="bi bi-stack"></i>
                            <span>Data Produk</span>
                        </a>
                        <ul class="submenu active" style="display: block;">
                            <li class="submenu-item ">
                                <a href="/dataproduk">Daftar Data Produk</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="/createdp"">Input Data Produk</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item  has-sub">
                        <a href="/dataklastering" class="sidebar-link">
                            <i class="bi bi-stack"></i>
                            <span>Data Klastering</span>
                        </a>
                        <ul class="submenu active" style="display: block;">
                            <li class="submenu-item ">
                                <a href="/dataklastering">Daftar Data Klastering</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="createdk">Input Data Klastering</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-info-circle"></i>
                            <span>Tentang</span>
                        </a>
                    </li>
                </ul>
            </div>
            <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
        </div>
    </div>
    <div id="main" class='layout-navbar'>
        <header class='mb-3'>
            <nav class="navbar navbar-expand navbar-light ">
                <div class="container-fluid">
                    <a href="#" class="burger-btn d-block">
                        <i class="bi bi-justify fs-3"></i>
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        </ul>
                        <div class="dropdown">
                            <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="user-menu d-flex">
                                    <div class="user-name text-end">
                                        <h6 class="mb-0 text-gray-600 me-3">Admin</h6>
                                    </div>
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-box-arrow-left me-2"></i> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
