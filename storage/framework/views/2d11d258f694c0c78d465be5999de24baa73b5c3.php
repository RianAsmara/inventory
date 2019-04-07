<div class="main-header" data-background-color="light-blue2">
    <div class="nav-top">
        <div class="container d-flex flex-row">
            <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
                data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="icon-menu"></i>
                </span>
            </button>
            <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
            <!-- Logo Header -->
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="<?php echo e(asset('img/logo.svg')); ?>" alt="navbar brand" class="navbar-brand">
            </a>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg p-0">

                
            </nav>
            <!-- End Navbar -->
        </div>
    </div>
    <div class="container">
        <div class="nav-bottom bg-white">
            <h3 class="title-menu d-flex d-lg-none">
                Menu
                <div class="close-menu"> <i class="flaticon-cross"></i></div>
            </h3>
            <ul class="nav page-navigation page-navigation-info">

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="link-icon icon-screen-desktop"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item submenu">
                    <a class="nav-link" href="#">
                        <i class="link-icon icon-screen-desktop"></i>
                        <span class="menu-title">Data Master</span>
                    </a>
                    <div class="navbar-dropdown animated fadeIn">
                        <ul>
                            <li>
                                <a href="<?php echo e(route('makanan.index')); ?>">Makanan Kering</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('bumbu.index')); ?>">Bumbu Kering</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="link-icon icon-screen-desktop"></i>
                        <span class="menu-title">Checkout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
