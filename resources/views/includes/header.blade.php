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
                <img src="{{asset('img/logo.svg')}}" alt="navbar brand" class="navbar-brand">
            </a>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg p-0">

                {{--  <div class="container-fluid p-0">
                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                        <li class="nav-item dropdown hidden-caret">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"
                                aria-expanded="false">
                                <div class="avatar-sm">
                                    <img src="../assets/img/profile.jpg" alt="..."
                                        class="avatar-img rounded-circle">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-user animated fadeIn">
                                <div class="dropdown-user-scroll scrollbar-outer">
                                    <li>
                                        <div class="user-box">
                                            <div class="avatar-lg"><img src="../assets/img/profile.jpg"
                                                    alt="image profile" class="avatar-img rounded"></div>
                                            <div class="u-text">
                                                <h4>Hizrian</h4>
                                                <p class="text-muted">hello@example.com</p><a
                                                    href="profile.html"
                                                    class="btn btn-xs btn-secondary btn-sm">View Profile</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Logout</a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>  --}}
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
                                <a href="{{ route('makanan.index') }}">Makanan Kering</a>
                            </li>
                            <li>
                                <a href="../demo1/index.html">Bumbu Kering</a>
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
