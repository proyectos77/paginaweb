@extends('head')

<body class="page-about">

    @include('header')

    <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/inicio/acerca-denosotros.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Acerca de nosotros</h2>
        <ol>
          <li>Acerca de nosotros</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4" data-aos="fade-up">
          <div class="col-lg-4">
            <img src="assets/img/nosotros/fondo-programacion.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8">
            <div class="content ps-lg-5">
              <h1>Desarrollo Web Personalizado</h1>
              <p>
                Lleva tu Negocio al Mundo Digital con una Página Web a la Medida.
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> Creación de una página web y presencia en línea</li>
                <li><i class="bi bi-check-circle-fill"></i> Implementación de estrategias de comercio electrónico</li>
                <li><i class="bi bi-check-circle-fill"></i> Desarrollo de estrategias de marketing digital</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Choose Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Por qué elegirnos</h2>

        </div>

        <div class="row g-0" data-aos="fade-up" data-aos-delay="200">

          <div class="col-xl-5 img-bg" style="background-image: url('assets/img/nosotros/hero-bg32.jpg')"></div>
          <div class="col-xl-7 slides  position-relative">

            <div class="slides-1 swiper">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Te ofrecemos nuetro mejor servicio</h3>
                    <h4 class="mb-3">Cuales serian las garantías para contar con una página wed para tu negocio.</h4>
                    <p>No pierdas la oportunidad de destacar en el mercado digital. Permítenos crear una página web que refleje la esencia de tu negocio, te ayude a alcanzar tus metas y genere resultados tangibles. ¡Contáctanos hoy mismo para dar el primer paso hacia una presencia en línea exitosa y rentables!</p>                  </div>
                </div><!-- End slide item -->

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Te ayudamos</h3>
                    <h4 class="mb-3">A tener una presencia en línea sólida es esencial para el crecimiento y el éxito de cualquier negocio.</h4>
                    <p>Una página web bien diseñada y funcional puede abrir nuevas puertas de oportunidad, aumentar la visibilidad de tu marca y atraer a un público más amplio.</h4>
                    <p>Dolorem quia fuga consectetur voluptatem. Earum consequatur nulla maxime necessitatibus cum accusamus. Voluptatem dolorem ut numquam dolorum delectus autem veritatis facilis. Et ea ut repellat ea. Facere est dolores fugiat dolor.</p>
                  </div>
                </div><!-- End slide item -->

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">¿Por qué deberías considerar invertir en una página web?</h3>
                    <h4 class="mb-3">No hay límites geográficos, lo que significa que puedes expandir tu negocio más allá de las fronteras locales y alcanzar nuevos mercados.</h4>
                    <p>Con nuestra experiencia y conocimiento en desarrollo web, podemos crear una página web única y a medida que refleje la esencia de tu negocio y atraiga a tu público objetivo. Nuestro enfoque personalizado nos permite entender tus necesidades específicas y trabajar en estrecha colaboración contigo para desarrollar una solución que se adapte perfectamente a tus objetivos.</p>
                  </div>
                </div><!-- End slide item -->

              </div>
              <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>

        </div>

      </div>
    </section><!-- End Why Choose Us Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Grupo de trabajo</h2>
        </div>

        <div class="row gy-4">
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/perfil/perfil_3.png" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Geovanni Pérez Polo</h4>
                <br>
                <h4>Perfil</h4>
                <span>Desarrollador Wed</span>
                <span>Estudiante Ingeniería de Sistemas</span>
                <span>Diplomado en PHP</span>
                <span>Diplomado en JAVA</span>
              </div>
              </div>
              
            </div>
          </div>

          {{-- <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Perfil</h4>
                <span>Desarrollador Wed</span>
              </div>
              
            </div>
          </div> --}}
        </div>


      </div>
    </section><!-- End Team Section -->

  </main><!-- End #main -->

    @include('footer')

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
