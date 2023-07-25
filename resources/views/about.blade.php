@extends('head')

<body class="page-about">

    @include('header')

    <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/inicio/acerca-denosotros.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Nosotros</h2>
        <ol>
          <li>Nosotros</li>
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
              <ol>
                <h2>Nuestros Valores</h2>
              </ol>
              
               <ul>
                <li><i class="bi bi-check-circle-fill" style="text-align: justify;"></i> <strong>Calidad:</strong> Compromiso con la entrega de servicios y soluciones de desarrollo web de alta calidad, cumpliendo con los estándares más exigentes y buscando la excelencia en cada proyecto.</li>
                <li><i class="bi bi-check-circle-fill" style="text-align: justify;"></i><strong> Innovación:</strong> Promover la creatividad y la innovación en el desarrollo web, adoptando nuevas tecnologías y tendencias para ofrecer soluciones modernas y vanguardistas.</li>
                <li><i class="bi bi-check-circle-fill" style="text-align: justify;"></i> <strong>Orientación al cliente:</strong> Enfocarse en las necesidades del cliente y brindar un servicio personalizado y adaptado a cada cliente. Escuchar activamente, comprender sus objetivos y desafíos, y ofrecer soluciones que los ayuden a alcanzar el éxito.</li>
                {{-- <li><i class="bi bi-check-circle-fill"></i> Colaboración: Fomentar un ambiente de trabajo colaborativo, tanto internamente con el equipo de desarrollo web como con los clientes y socios comerciales. Trabajar en equipo para lograr los mejores resultados y aprovechar el conocimiento colectivo.</li> --}}
                <li><i class="bi bi-check-circle-fill"style="text-align: justify;"></i> <strong>Confianza y transparencia:</strong> Establecer relaciones basadas en la confianza mutua, la honestidad y la transparencia. Cumplir con los compromisos asumidos, ser claros en la comunicación y mantener la confidencialidad de la información del cliente.</li>
                {{-- <li><i class="bi bi-check-circle-fill"></i> Adaptabilidad: Ser flexible y adaptarse rápidamente a los cambios y desafíos del entorno digital en constante evolución. Estar dispuestos a aprender, mejorar y ajustar las estrategias y soluciones según las necesidades cambiantes del mercado.</li> --}}
                <li><i class="bi bi-check-circle-fill"style="text-align: justify;"></i><strong> Responsabilidad social y ética: </strong>Actuar de manera ética y responsable, considerando el impacto social y medioambiental de las soluciones y servicios de desarrollo web. Cumplir con las leyes y regulaciones pertinentes y actuar de manera ética en todas las interacciones comerciales.</li>
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
          <h2>Nosotros</h2>

        </div>

        <div class="row g-0" data-aos="fade-up" data-aos-delay="200">

          <div class="col-xl-5 img-bg" style="background-image: url('assets/img/nosotros/hero-bg32.jpg')"></div>
          <div class="col-xl-7 slides  position-relative">

            <div class="slides-1 swiper">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Misión</h3>
                    <p>Nuestra misión es brindar soluciones de desarrollo web creativas y personalizadas que ayuden a 
                      nuestros clientes a alcanzar sus metas en línea. Nos esforzamos por ofrecer servicios de alta calidad, 
                      enfocándonos en la satisfacción del cliente, la innovación tecnológica y la entrega oportuna de proyectos. 
                      Trabajamos en estrecha colaboración con nuestros clientes para comprender sus necesidades y superar sus expectativas, 
                      brindando soluciones web que impulsen su éxito.
                    </p>
                  </div>
                </div><!-- End slide item -->

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Visión</h3>
                    <p>Nuestra visión es convertirnos en un líder reconocido en el campo del desarrollo web, ofreciendo soluciones 
                      vanguardistas y de vanguardia que impulsen el crecimiento y la presencia en línea de nuestros clientes. 
                      Buscamos ser una referencia en términos de calidad, creatividad e innovación en el desarrollo web, 
                      estableciendo relaciones sólidas y duraderas con nuestros clientes basadas en la confianza mutua y la 
                      excelencia en el servicio. Aspiramos a mantenernos actualizados con las últimas tecnologías y tendencias 
                      en el ámbito web para seguir brindando soluciones eficientes y efectivas.
                    </p>
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
          <h2>Grupo de Trabajo</h2>
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
                <span>Desarrollador Web</span>
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
                <span>Desarrollador Web</span>
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
