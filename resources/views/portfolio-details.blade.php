@extends('head')

<body class="page-portfolio">

    @include('header')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('assets/img/portafolio/portafolio-header.jpg') }}');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Portfolio</h2>
        <ol>
          <li>Portfolio</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="slides-1 portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="{{ asset('assets/img/portafolio/portafolio_1.jpg') }}" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="{{ asset('assets/img/portafolio/portafolio_2.jpg') }}" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="{{ asset('assets/img/portafolio/portafolio_3.jpg') }}" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="{{ asset('assets/img/portafolio/portafolio_4.jpg') }}" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="{{ asset('assets/img/portafolio/portafolio_5.jpg') }}" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="{{ asset('assets/img/portafolio/portafolio_6.jpg') }}" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Información del Proyecto</h3>
              <ul>
                <li><strong>Categoria</strong>: Diseño wed</li>
                <li><strong>Cliente</strong>: Empresa ASU</li>
                <li><strong>Fecha del proyecto</strong>: 01 Marzo, 2023</li>
                <li><strong>URL del proyecto</strong>: <a href="#">www.example.com</a></li>
              </ul>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  @include('footer')

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

   <!-- Vendor JS Files -->
   <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="assets/vendor/aos/aos.js"></script>
   <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
   <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
   <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
   <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
