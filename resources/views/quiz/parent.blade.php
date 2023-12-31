<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Moderna || @yield('title')</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('quiz/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('quiz/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('quiz/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('quiz/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('quiz/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('quiz/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('quiz/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('quiz/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('quiz/assets/vendor/aos/aos.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('quiz/assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Moderna - v2.0.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-transparent">
  <div class="container">

    <div class="logo float-left">
      <h1 class="text-light"><a href="{{ route('index') }}"><span>Moderna</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="{{ route('index') }}"><img src="{{ asset('quiz/assets/img/logo.png') }}" alt="" class="img-fluid"></a>-->
    </div>

    <nav class="nav-menu float-right d-none d-lg-block">
      <ul>
        <li class="active"><a href="{{ route('index') }}">Home</a></li>
        <li><a href="{{ route('about') }}">About Us</a></li>
        <li><a href="{{ route('services') }}">Services</a></li>
        <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
        <li><a href="{{ route('team') }}">Team</a></li>
        <li><a href="{{ route('blog') }}">Blog</a></li>
        <li class="drop-down"><a href="">Drop Down</a>
          <ul>
            <li><a href="#">Drop Down 1</a></li>
            <li class="drop-down"><a href="#">Drop Down 2</a>
              <ul>
                <li><a href="#">Deep Drop Down 1</a></li>
                <li><a href="#">Deep Drop Down 2</a></li>
                <li><a href="#">Deep Drop Down 3</a></li>
                <li><a href="#">Deep Drop Down 4</a></li>
                <li><a href="#">Deep Drop Down 5</a></li>
              </ul>
            </li>
            <li><a href="#">Drop Down 3</a></li>
            <li><a href="#">Drop Down 4</a></li>
            <li><a href="#">Drop Down 5</a></li>
          </ul>
        </li>
        <li><a href="{{ route('contact') }}">Contact Us</a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </div>
</header><!-- End Header -->


@yield('content')

<!-- ======= Footer ======= -->
<footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

  <div class="footer-newsletter">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h4>Our Newsletter</h4>
          <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
        </div>
        <div class="col-lg-6">
          <form action="" method="post">
            <input type="email" name="email"><input type="submit" value="Subscribe">
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('index') }}">Home</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('about') }}">About us</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('services') }}">Services</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('team') }}">Terms of service</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-contact">
          <h4>Contact Us</h4>
          <p>
            A108 Adam Street <br>
            New York, NY 535022<br>
            United States <br><br>
            <strong>Phone:</strong> +1 5589 55488 55<br>
            <strong>Email:</strong> info@example.com<br>
          </p>

        </div>

        <div class="col-lg-3 col-md-6 footer-info">
          <h3>About Moderna</h3>
          <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
          <div class="social-links mt-3">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong><span>Moderna</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>



<!-- Vendor JS Files -->
<script src="{{ asset('quiz/assets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('quiz/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('quiz/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('quiz/assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('quiz/assets/vendor/venobox/venobox.min.js') }}"></script>
<script src="{{ asset('quiz/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('quiz/assets/vendor/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('quiz/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('quiz/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('quiz/assets/vendor/aos/aos.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('quiz/assets/js/main.js') }}"></script>


@yield('scripts')

</body>

</html>
