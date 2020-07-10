<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('/assets/css/style.css')}}" rel="stylesheet">

</head>

<body>

    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
    
          <h1 class="logo mr-auto"><a href="index.html">Stackoversambat</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    
          <a href="/register" class="get-started-btn-danger scrollto">Sign up</a>
          <a href="/login" class="get-started-btn scrollto">Log in</a>
    
        </div>
      </header>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center mt-4">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center">
          <h1>We love people who code</h1>
          <h2>We build products that empower developers and connect them to solutions that enable productivity, growth, and discovery</h2>
        </div>
      </div>
      <div class="text-center">
        <a href="/login" class="btn-get-started scrollto">For Developers</a>
      </div>

      <div class="row icon-boxes">
      </div>
    </div>
  </section><!-- End Hero -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('/assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('/assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('/assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>