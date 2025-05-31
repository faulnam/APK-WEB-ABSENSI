
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Beranda</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    <style>
        .sidebar-link {
    transition: all 0.3s ease;
}
.sidebar-link:hover {
    background-color: #f0f4ff;
    text-decoration: none;
}
.sidebar-link.active {
    background-color: #e3f0ff;
    font-weight: bold;
}

    </style>

</head>

<body class="animsition">
    <?php 
    session_start();
    if (!isset($_SESSION['username'])) {
        header("location: index.php");
    }else {
        $username = $_SESSION['username'];  
    }

 ?>
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="" href="index.html">
                          
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="admin2.php">
                                <i class="fas fa-tachometer-alt"></i>Beranda</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                
                            </ul>
                        </li>
                        <li>
                            <a href="datakaryawan.php">
                                <i class="fas fa-chart-bar"></i>Data Karyawan</a>
                        </li>
                        <li>
                            <a href="datauser.php">
                                <i class="fas fa-table"></i>Data user</a>
                        </li>
                        <li>
                            <a href="datajabatan.php">
                                <i class="far fa-check-square"></i>Data Jabatan</a>
                        </li>
                        <li>
                            <a href="data_absen.php">
                                <i class="fas fa-calendar-alt"></i>Data Absen</a>
                        </li>
                       <li>
                            <a href="data_keterangan.php">
                                <i class="fas fa-table"></i>data Keterangan
                            </a>
                        </li>
                       
                       
                    </ul>
                </div>
            </nav>

        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
       <aside class="menu-sidebar d-none d-lg-block bg-white shadow-sm" style="min-height: 100vh; border-right: 1px solid #eaeaea;">
    <!-- Logo / Brand -->
    <div class="logo py-4 px-3 border-bottom text-center">
        <a href="#" class="text-decoration-none">
            <h2 class="text-primary font-weight-bold m-0">ABKaryawan</h2>
            <small class="text-muted d-block">Admin Panel</small>
        </a>
    </div>

    <!-- Sidebar Navigation -->
    <div class="menu-sidebar__content js-scrollbar1 px-3 py-4">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">

                <!-- Dashboard -->
                <li class="active mb-2">
                    <a class="d-flex align-items-center text-dark font-weight-semibold p-2 rounded sidebar-link active" href="#">
                        <i class="fas fa-tachometer-alt mr-3 text-primary"></i> Beranda
                    </a>
                </li>

                <!-- Data Karyawan -->
                <li class="mb-2">
                    <a class="d-flex align-items-center text-dark p-2 rounded sidebar-link" href="datakaryawan.php">
                        <i class="fas fa-users mr-3 text-success"></i> Data Karyawan
                    </a>
                </li>

                <!-- Data User -->
                <li class="mb-2">
                    <a class="d-flex align-items-center text-dark p-2 rounded sidebar-link" href="datauser.php">
                        <i class="fas fa-user-circle mr-3 text-warning"></i> Data User
                    </a>
                </li>

                <!-- Data Jabatan -->
                <li class="mb-2">
                    <a class="d-flex align-items-center text-dark p-2 rounded sidebar-link" href="datajabatan.php">
                        <i class="fas fa-briefcase mr-3 text-info"></i> Data Jabatan
                    </a>
                </li>

                <!-- Data Absen -->
                <li class="mb-2">
                    <a class="d-flex align-items-center text-dark p-2 rounded sidebar-link" href="data_absen.php">
                        <i class="fas fa-calendar-check mr-3 text-danger"></i> Data Absen
                    </a>
                </li>

                <!-- Data Keterangan -->
                <li class="mb-4">
                    <a class="d-flex align-items-center text-dark p-2 rounded sidebar-link" href="data_keterangan.php">
                        <i class="fas fa-info-circle mr-3 text-secondary"></i> Data Keterangan
                    </a>
                </li>

                <!-- Logout -->
                <li>
                    <a class="d-flex align-items-center text-danger font-weight-semibold p-2 rounded sidebar-link" href="logout.php">
                        <i class="fas fa-sign-out-alt mr-3"></i> Logout
                    </a>
                </li>

            </ul>
        </nav>
    </div>
</aside>

        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <h1>ABKaryawan</h1>
                          
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
           <div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">

            <!-- Dashboard Welcome Card -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card shadow-lg border-0 rounded-lg p-5 text-center" style="background: linear-gradient(145deg, #ffffff, #f0f0f0);">
                        <div class="mb-4">
                            <img src="img/logokaryawan.png" alt="Logo" class="img-fluid" style="max-width: 180px;">
                        </div>
                        <h2 class="mb-2 font-weight-bold text-dark">Selamat Datang, Admin!</h2>
                        <p class="text-muted mb-4">
                            Anda telah berhasil masuk ke <strong>ABKaryawan</strong><br>
                            Gunakan menu di samping untuk mengelola data karyawan dan sistem.
                        </p>
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <ul class="list-group text-left shadow-sm">
                                    <li class="list-group-item d-flex align-items-center">
                                        <i class="fa fa-user-circle mr-3 text-primary"></i> Kelola Data Karyawan
                                    </li>
                                    <li class="list-group-item d-flex align-items-center">
                                        <i class="fa fa-calendar-check-o mr-3 text-success"></i> Lihat Kehadiran
                                    </li>
                                    <li class="list-group-item d-flex align-items-center">
                                        <i class="fa fa-cogs mr-3 text-warning"></i> Pengaturan Sistem
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="mt-4">
                            <a href="datakaryawan.php" class="btn btn-primary btn-lg">
                                <i class="fa fa-arrow-right mr-2"></i> Mulai Kelola Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="row mt-5">
                <div class="col-md-12 text-center">
                    <div class="copyright text-muted">
                        <p>&copy; 2022 Faulnam. All rights reserved. Template by 
                            <a href="https://colorlib.com" target="_blank">Faulnam</a>.
                        </p>
                    </div>
                </div>
            </div>
            <!-- End Footer -->

        </div>
    </div>
</div>

            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
