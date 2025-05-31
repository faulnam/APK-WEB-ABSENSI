<?php
session_start();
include ("koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Sistem Informasi Karyawan - Home</title>

  <link rel="icon" href="img/Fevicon.png" type="image/png" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css" />

  <!-- FontAwesome -->
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css" />

  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/style.css" />

  <style>
    /* --- Custom styles for a professional modern look --- */
    body {
      font-family: 'Poppins', sans-serif;
      background: #f8f9fa;
      color: #333;
      line-height: 1.6;
    }
    a {
      text-decoration: none !important;
    }
    /* Header */
    .header_area {
      background: #ffffff;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      position: sticky;
      top: 0;
      z-index: 1030;
    }
    .navbar-brand img {
      height: 30px;
      transition: transform 0.3s ease;
      
    }
    .navbar-brand img:hover {
      transform: scale(1.1);
    }
    .menu_nav .nav-link {
      font-weight: 600;
      font-size: 18px;
      color: #343a40;
      padding: 10px 0;
      transition: color 0.3s ease;
    }
    .menu_nav .nav-link:hover,
    .menu_nav .nav-item.active > .nav-link {
      color: #007bff;
    }
    .navbar-toggler {
      border: none;
    }
    .icon-bar {
      display: block;
      width: 22px;
      height: 3px;
      margin: 5px auto;
      background-color: #007bff;
      transition: all 0.3s ease-in-out;
    }

    /* Hero Banner */
    .hero-banner {
      background: linear-gradient(135deg, #007bff 0%, #6610f2 100%);
      color: white;
      padding: 80px 0;
      border-radius: 0 0 40px 40px;
      box-shadow: 0 8px 24px rgb(0 123 255 / 0.3);

    }
    .hero-banner__img img {
      max-width: 100%;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }
    .hero-banner__content h1 {
      font-size: 3rem;
      font-weight: 700;
      margin-bottom: 1rem;
      text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3);
    }
    .hero-banner__content p {
      font-size: 1.25rem;
      font-weight: 500;
      max-width: 480px;
      text-shadow: 1px 1px 6px rgba(0, 0, 0, 0.2);
    }

    /* Section Titles */
    .section-intro__title {
      font-weight: 700;
      font-size: 2.5rem;
      margin-bottom: 40px;
      color: #212529;
      letter-spacing: 1px;
      position: relative;
      display: inline-block;
    }
    .section-intro__title::after {
      content: '';
      width: 60px;
      height: 4px;
      background: #007bff;
      position: absolute;
      bottom: -15px;
      left: 0;
      border-radius: 3px;
    }

    /* Kontak Cards */
    #kontak .card-feature {
      background: white;
      border-radius: 15px;
      padding: 30px 20px;
      box-shadow: 0 8px 24px rgb(0 123 255 / 0.15);
      transition: box-shadow 0.3s ease;
      cursor: default;
    }
    #kontak .card-feature:hover {
      box-shadow: 0 12px 30px rgb(0 123 255 / 0.3);
    }
    .card-feature__title {
      font-weight: 700;
      font-size: 1.5rem;
      color: #007bff;
      margin-bottom: 15px;
    }
    .card-feature__subtitle {
      font-weight: 500;
      font-size: 1.125rem;
      color: #495057;
    }

    /* Login Section */
    #login {
      background: #ffffff;
      padding: 60px 0;
      text-align: center;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgb(0 123 255 / 0.1);
      margin-bottom: 80px;
    }
    #login h1 {
      font-weight: 700;
      margin-bottom: 20px;
      color: #343a40;
      font-size: 2.5rem;
    }
    #login p {
      font-size: 1.125rem;
      color: #6c757d;
      margin-bottom: 40px;
    }
    #login a button {
      width: 180px;
      padding: 12px 0;
      font-weight: 600;
      font-size: 1.125rem;
      border-radius: 40px;
      margin: 0 15px;
      transition: transform 0.3s ease;
      box-shadow: 0 6px 18px rgba(0, 123, 255, 0.3);
      border: none;
    }
    #login a button:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 24px rgba(0, 123, 255, 0.5);
    }
    #login a .btn-warning {
      background: #ffc107;
      color: #212529;
    }
    #login a .btn-warning:hover {
      background: #e0a800;
      color: white;
    }
    #login a .btn-primary {
      background: #007bff;
      color: white;
    }
    #login a .btn-primary:hover {
      background: #0056b3;
      color: white;
    }

    /* Footer */
    footer.footer-area {
      background: #212529;
      padding: 25px 0;
      color: #adb5bd;
      font-weight: 500;
      font-size: 0.9rem;
    }
    footer.footer-area a {
      color: #adb5bd;
      margin-left: 15px;
      font-size: 1.3rem;
      transition: color 0.3s ease;
    }
    footer.footer-area a:hover {
      color: #007bff;
    }

    /* Responsive Tweaks */
    @media (max-width: 991.98px) {
      .hero-banner__content h1 {
        font-size: 2.2rem;
      }
      #login a button {
        width: 100%;
        margin: 10px 0;
      }
    }

    
  </style>
</head>
<body>

<!-- Header Menu Area -->
<header class="header_area">
  <div class="main_menu">
    <nav class="navbar navbar-expand-lg navbar-light container">
      <a class="navbar-brand logo_h" href="index.php">
        <img src="img/Fevicon.png" alt="Logo" />
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto menu_nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#login" rel="page-scroll">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#kontak" rel="page-scroll">Kontak</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</header>

<!-- Main Content -->
<main class="side-main container my-5">

  <!-- Hero Banner -->
  <section class="hero-banner row align-items-center">
    <div class="col-lg-6 hero-banner__content text-center text-lg-left">
      <h1>Selamat datang di Sistem Informasi Karyawan</h1>
      <p>Portal sederhana berbasis web untuk mengelola data karyawan dan kehadiran.</p>
    </div>
    <div class="col-lg-6 hero-banner__img text-center mt-4 mt-lg-0">
      <img
        class="img-fluid"
        src="img/logokaryawann.png"
        alt="Banner Sistem Informasi Karyawan"
        loading="lazy"
      />
    </div>
  </section>

  <!-- Login Section -->
  <section id="login" class="mt-5">
    <h1>Login</h1>
    <p>Login untuk mengakses data karyawan dan kehadiran.</p>
    <a href="login.php" title="Login Admin">
      <button type="button" class="btn btn-warning shadow">Admin</button>
    </a>
    <a href="karyawan/login_karyawan.php" title="Login Karyawan">
      <button type="button" class="btn btn-primary shadow">Karyawan</button>
    </a>
  </section>

  <!-- Kontak Section -->
  <section id="kontak" class="my-5">
    <h1 class="section-intro__title">Kontak</h1>
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card-feature text-center p-4">
          <h3 class="card-feature__title">Telepon</h3>
          <p class="card-feature__subtitle">+62 859 1716 81988</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card-feature text-center p-4">
          <h3 class="card-feature__title">Email</h3>
          <p class="card-feature__subtitle">syifakul.anm@gmail.com</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card-feature text-center p-4">
          <h3 class="card-feature__title">Alamat</h3>
          <p class="card-feature__subtitle">Jl. Kapten Tendean No 35, Sidoarjo</p>
        </div>
      </div>
    </div>
  </section>
</main>

<!-- Footer -->
<footer class="footer-area text-center">
  <div class="container">
    <span>© 2025 Sistem Informasi Karyawan. All rights reserved.</span>
    <span class="ml-3">
      <a href="#"><i class="fab fa-facebook-f"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
    </span>
  </div>
</footer>

<!-- JS Scripts -->
<script src="vendors/jquery/jquery-3.2.1.min.js"></script>
<script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
<script src="vendors/owl-carousel/owl.carousel.min.js"></script>

</body>
</html>
