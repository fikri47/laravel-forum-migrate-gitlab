<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Forum Diskusi</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('boldo/assets/img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('boldo/assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('boldo/assets/img/favicons/favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('boldo/assets/img/favicons/favicon.ico') }}">
    <link rel="manifest" href="{{ asset('boldo/assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('boldo/assets/img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('boldo/vendors/prism/prism.css') }}" rel="stylesheet">
    <link href="{{ asset('boldo/vendors/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('boldo/assets/css/theme.css') }}" rel="stylesheet" />
    <link href="{{ asset('boldo/assets/css/user.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg fixed-top navbar-dark" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="index.html">
          <h2 class="text-white fw-bold"><i class="bi bi-chat-dots"></i> FOURDI</h2>
          {{-- <img src="{{ asset('boldo/assets/img/Logo.png') }}" alt="" /> --}}
        </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa-solid fa-bars text-white fs-3"></i></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
              <li class="nav-item"><a class="nav-link active" aria-current="page" href="/login">Masuk</a></li>
              <li class="nav-item mt-2 mt-lg-0"><a class="nav-link btn btn-light text-black w-md-25 w-50 w-lg-100" aria-current="page" href="/register">Daftar</a></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="bg-dark"><img class="img-fluid position-absolute end-0" src="{{ asset('boldo/assets/img/hero/hero-bg.png') }}" alt="" />


        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section>

          <div class="container">
            <div class="row align-items-center py-lg-8 py-6">
              <div class="col-lg-6 text-center text-lg-start">
                <h1 class="text-white fs-5 fs-xl-6 fw-bold">Habis Gelap Terbitlah Terang.</h1>
                <p class="text-white py-lg-3 py-2">Fourdi adalah tempat berbagi ilmu ratusan juta siswa dan pakar edukasi, belajar bersama untuk menyelesaikan soal-soal yang paling rumit sekalipun.</p>
                <div class="d-sm-flex align-items-center gap-3">
                  <div class="col-auto w-100 w-lg-50">
                    <input class="form-control mb-2 border-light fs-1" type="email" placeholder="Ajukan Pertanyaanmu?" />
                  </div>
                  <div class="col-auto mt-2 mt-lg-0">
                    <a href="/index" class="btn btn-success text-dark fs-1"><i class="bi bi-search"></i></a>
                  </div>                  
                </div>
              </div>
              <div class="col-lg-6 text-center text-lg-end mt-3 mt-lg-0"><img class="img-fluid" src="{{ asset('boldo/assets/img/hero/hero-graphics.png') }}" alt="" /></div>
            </div>
            <div class="swiper">
              <div class="swiper-container swiper-shadow swiper-theme" data-swiper='{"slidesPerView":2,"breakpoints":{"640":{"slidesPerView":2,"spaceBetween":20},"768":{"slidesPerView":4,"spaceBetween":40},"992":{"slidesPerView":5,"spaceBetween":40},"1024":{"slidesPerView":4,"spaceBetween":50},"1025":{"slidesPerView":6,"spaceBetween":50}},"spaceBetween":10,"grabCursor":true,"pagination":{"el":".swiper-pagination","clickable":true},"loop":true,"freeMode":true,"autoplay":{"delay":2500,"disableOnInteraction":false}}'>
                <!-- Loop dari kategori -->
                <div class="swiper-wrapper">
                  <div class="swiper-slide text-center text-white">MATEMATIKA</div>
                  <div class="swiper-slide text-center text-white">SBMPTN</div>
                  <div class="swiper-slide text-center text-white">BIOLOGI</div>
                  <div class="swiper-slide text-center text-white">AKUNTANSI</div>
                  <div class="swiper-slide text-center text-white">KIMIA</div>
                  <div class="swiper-slide text-center text-white">SEJARAH</div>
                  <!-- <div class="swiper-slide text-center"><img src="{{ asset('boldo/assets/img/logos/boldo.png') }}" alt="" /></div>
                  <div class="swiper-slide text-center"><img src="{{ asset('boldo/assets/img/logos/presto.png') }}" alt="" /></div>
                  <div class="swiper-slide text-center"><img src="{{ asset('boldo/assets/img/logos/boldo.png') }}" alt="" /></div>
                  <div class="swiper-slide text-center"><img src="{{ asset('boldo/assets/img/logos/presto.png') }}" alt="" /></div>
                  <div class="swiper-slide text-center"><img src="{{ asset('boldo/assets/img/logos/boldo.png') }}" alt="" /></div>
                  <div class="swiper-slide text-center"><img src="{{ asset('boldo/assets/img/logos/presto.png') }}" alt="" /></div> -->
                </div>
              </div>
            </div>
          </div>
          <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


      </div>


      <!-- ============================================-->
      <!-- <section> begin ============================-->      
    <!-- <section> close ============================-->
    <!-- ============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{ asset('boldo/vendors/popper/popper.min.js') }}"></script>
    <script src="{{ asset('boldo/vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('boldo/vendors/anchorjs/anchor.min.js') }}"></script>
    <script src="{{ asset('boldo/vendors/is/is.min.js') }}"></script>
    <script src="{{ asset('boldo/vendors/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('boldo/vendors/lodash/lodash.min.js') }}"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{ asset('boldo/vendors/prism/prism.js') }}"></script>
    <script src="{{ asset('boldo/vendors/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('boldo/assets/js/theme.js') }}"></script>

  </body>

</html>