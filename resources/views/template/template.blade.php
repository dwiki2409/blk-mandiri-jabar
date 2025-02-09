<!--
THEME: Bingo | Responsive Multipurpose Parallax HTML5 Template
VERSION: 1.0.0
AUTHOR: Themefisher

HOMEPAGE: https://themefisher.com/products/bingo-bootstrap-business-template/
DEMO: https://demo.themefisher.com/themefisher/bingo/
GITHUB: https://github.com/themefisher/Bingo-Bootstrap-Business-Template/

WEBSITE: https://themefisher.com
TWITTER: https://twitter.com/themefisher
FACEBOOK: https://www.facebook.com/themefisher
-->

<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>BLK Mandiri - {{ $title }}</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="One page parallax responsive HTML Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Bingo HTML Template v1.0">

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href='assets/images/logo_blk.png'>

  <!-- CSS
  ================================================== -->
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="{{'assets/'}}plugins\themefisher-font\style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="{{'assets/'}}plugins\bootstrap\bootstrap.min.css">
  <!-- Lightbox.min css -->
  <link rel="stylesheet" href="{{'assets/'}}plugins\lightbox2\css\lightbox.min.css">
  <!-- animation css -->
  <link rel="stylesheet" href="{{'assets/'}}plugins\animate\animate.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="{{'assets/'}}plugins\slick\slick.css">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{'assets/'}}css\style.css">

</head>

<body id="body">

  <!--
  Start Preloader
  ==================================== -->
  <div id="preloader">
    <div class='preloader'>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <!--
  End Preloader
  ==================================== -->

  <!--
Fixed Navigation
==================================== -->
  <header class="navigation fixed-top">
    <div class="container">
      <!-- main nav -->
      <nav class="navbar navbar-expand-lg navbar-light px-0">
        <!-- logo -->
        <a class="navbar-brand logo" href="{{ url('/') }}">
          <img loading="lazy" class="logo-default" src="{{'assets/'}}images/logo_blk.png" alt="logo"
            style="height:60px !important;">
          <img loading="lazy" class="logo-white" src="{{'assets/'}}images/logo_blk.png" alt="logo"
            style="height:60px !important;">
        </a>
        <!-- /logo -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navigation">
          <ul class="navbar-nav ml-auto text-center">
            <li class="nav-item {{ ($active == 'home') ? 'active' : '' }}">
              <a class="nav-link" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item {{ ($active == 'profile') ? 'active' : '' }}">
              <a class="nav-link" href="{{ url('/profile') }}">Profile</a>
            </li>
            <li
              class="nav-item dropdown {{ ($active == 'strukturOrganisasi' || $active == 'daftarKejuruan' || $active == 'pengumuman') ? 'active' : '' }}">
              <a class="nav-link dropdown-toggle" href="#!" id="navbarDropdown02" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Informasi <i class="tf-ion-chevron-down"></i>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown02">
                <li><a class="dropdown-item {{ ($active == 'strukturOrganisasi') ? 'active' : '' }}"
                    href="{{ url('/strukturOrganisasi') }}">Struktur Organisasi</a></li>
                <li><a class="dropdown-item {{ ($active == 'daftarKejuruan') ? 'active' : '' }}"
                    href="{{ url('/daftarKejuruan') }}">Daftar Kejuruan</a></li>
                <li><a class="dropdown-item {{ ($active == 'pengumuman') ? 'active' : '' }}"
                    href="{{ url('/pengumuman') }}">Pengumuman</a></li>
              </ul>
            </li>
            <li
              class="nav-item dropdown {{ ($active == 'syaratDanKetentuan' || $active == 'kebijakanPrivasi') ? 'active' : '' }}">
              <a class="nav-link dropdown-toggle" href="#!" id="navbarDropdown02" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Ketentuan & Kebijakan <i class="tf-ion-chevron-down"></i>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown02">
                <li><a class="dropdown-item {{ ($active == 'syaratDanKetentuan') ? 'active' : '' }}"
                    href="{{ url('/sk') }}">Syarat dan Ketentuan</a></li>
                <li><a class="dropdown-item {{ ($active == 'kebijakanPrivasi') ? 'active' : '' }}"
                    href="{{ url('/kebijakanPrivasi') }}">Kebijakan Privasi</a></li>
              </ul>
            </li>
            <li class="nav-item {{ ($active == 'kontak') ? 'active' : '' }}">
              <a class="nav-link" href="{{ url('/kontak') }}">Kontak</a>
            </li>
            <li class="nav-item {{ ($active == 'alumni') ? 'active' : '' }}">
              <a class="nav-link" href="{{ url('/alumni') }}">Alumni</a>
            </li>
            <li class="nav-item dropdown {{ ($active == 'login' || $active == 'register') ? 'active' : '' }}">
              <a class="nav-link dropdown-toggle" href="#!" id="navbarDropdown02" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Login/Register <i class="tf-ion-chevron-down"></i>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown02">
                <li><a class="dropdown-item {{ ($active == 'login') ? 'active' : '' }}"
                    href="{{ url('/login') }}">Login</a></li>
                <li><a class="dropdown-item {{ ($active == 'register') ? 'active' : '' }}"
                    href="{{ url('/register') }}">Register</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
      <!-- /main nav -->
    </div>
  </header>
  <!--
End Fixed Navigation
==================================== -->

  @yield('content')

<footer id="footer" class="bg-one">
    <div class="top-footer">
      <div class="container">
        <div class="row justify-content-around">
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
            <h3>About</h3>
            <p>Balai Latihan Kerja Mandiri (BLK Mandiri) Disnakertrans Jawa Barat adalah lembaga yang berkomitmen untuk meningkatkan kualitas sumber daya manusia melalui program pelatihan keterampilan praktis.</p>
          </div>
          <!-- End of .col-sm-3 -->

          <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
            <ul>
              <li>
                <h3>Info</h3>
              </li>
              <li><a href="{{ url('syaratDanKetentuan') }}">Syarat & Ketentuan</a></li>
              <li><a href="{{ url('kebijakanPrivasi') }}">Kebijakan Privasi</a></li>
              <li><a href="{{ url('strukturOrganisasi') }}">Struktur Organisasi</a></li>
            </ul>
          </div>
          <!-- End of .col-sm-3 -->

          <div class="col-lg-2 col-md-6 mb-5 mb-md-0">
            <ul>
              <li>
                <h3>Main Menu</h3>
              </li>
              <li><a href="{{ url('profile') }}">Profile</a></li>
              <li><a href="{{ url('pengumuman') }}">Pengumuman</a></li>
              <li><a href="{{ url('kontak') }}">Kontak</a></li>
              <li><a href="{{ url('alumni') }}">Alumni</a></li>
            </ul>
          </div>
          <!-- End of .col-sm-3 -->

          <div class="col-lg-3 col-md-6">
            <ul>
              <li>
                <h3>Connect with us Socially</h3>
              </li>
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Instagram</a></li>
              <li><a href="#">Youtube</a></li>
            </ul>
          </div>
          <!-- End of .col-sm-3 -->

        </div>
      </div> <!-- end container -->
    </div>
    <div class="footer-bottom">
      <h5>&copy; Copyright 2021. All rights reserved.</h5>
      <h6>Design and Developed by <a href="#">BLK Mandiri</a></h6>
    </div>
  </footer> <!-- end footer -->


  <!-- end Footer Area
========================================== -->
  <!--
    Essential Scripts
    =====================================-->
  <!-- Main jQuery -->
  <script src="{{'assets/'}}plugins\jquery\jquery.min.js"></script>

  <!-- Bootstrap4 -->
  <script src="{{'assets/'}}plugins\bootstrap\bootstrap.min.js"></script>
  <!-- Parallax -->
  <script src="{{'assets/'}}plugins\parallax\jquery.parallax-1.1.3.js"></script>
  <!-- lightbox -->
  <script src="{{'assets/'}}plugins\lightbox2\js\lightbox.min.js"></script>
  <!-- Owl Carousel -->
  <script src="{{'assets/'}}plugins\slick\slick.min.js"></script>
  <!-- filter -->
  <script src="{{'assets/'}}plugins\filterizr\jquery.filterizr.min.js"></script>
  <!-- Smooth Scroll js -->
  <script src="{{'assets/'}}plugins\smooth-scroll\smooth-scroll.min.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU"></script>
  <script src="{{'assets/'}}plugins\google-map\gmap.js"></script>

  <!-- Custom js -->
  <script src="{{'assets/'}}js\script.js"></script>



</body>

</html>
