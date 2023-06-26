@extends('head')

<body class="page-services">

    @include('header')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/servicio/services-header.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>sevicios</h2>
        <ol>
          <li>Servicios</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Our Services Section ======= -->
    <section id="services-list" class="services-list">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Servicios</h2>

        </div>

        <div class="row gy-5">

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="icon flex-shrink-0"><i class="bi bi-briefcase" style="color: #f57813;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Diseño de Páginas Web</a></h4>
              <p class="description" style="text-align: justify;">Creación y diseño de páginas web atractivas y funcionales, adaptadas a las necesidades y objetivos de cada cliente. Esto puede incluir el diseño de interfaces de usuario, diseño responsivo para dispositivos móviles y optimización de la experiencia del usuario.</p>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="icon flex-shrink-0"><i class="bi bi-card-checklist" style="color: #15a04a;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Desarrollo de Aplicaciones Web</a></h4>
              <p class="description" style="text-align: justify;">Creación de aplicaciones web personalizadas y escalables que brinden funcionalidades específicas y soluciones a medida para las necesidades de tu cliente. Esto puede incluir aplicaciones web empresariales, plataformas de comercio electrónico, sistemas de gestión de contenidos (CMS), entre otros.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="icon flex-shrink-0"><i class="bi bi-bar-chart" style="color: #d90769;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Comercio Electrónico</a></h4>
              <p class="description" style="text-align: justify;">Desarrollo de tiendas en línea seguras y fáciles de usar, que permitan a los clientes vender sus productos y servicios en Internet. Esto puede incluir integración de pasarelas de pago, gestión de inventario, diseño de catálogos de productos y opciones de personalización.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="icon flex-shrink-0"><i class="bi bi-binoculars" style="color: #15bfbc;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Optimización para Motores de Búsqueda</a></h4>
              <p class="description" style="text-align: justify;">Implementación de estrategias y técnicas de SEO para mejorar la visibilidad y el posicionamiento de los sitios web en los motores de búsqueda. Esto incluye optimización de palabras clave, generación de contenido relevante, mejora de la estructura del sitio y estrategias de construcción de enlaces.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
            <div class="icon flex-shrink-0"><i class="bi bi-brightness-high" style="color: #f5cf13;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Consultoría y Asesoramiento</a></h4>
              <p class="description" style="text-align: justify;">Brindar asesoramiento personalizado y consultoría a los clientes en relación con sus necesidades específicas de desarrollo web. Esto puede incluir análisis de requisitos, selección de tecnologías adecuadas, estrategias de marketing digital y recomendaciones de mejora.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="600">
            <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week" style="color: #1335f5;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Mantenimiento y Actualización de Sitios Web</a></h4>
              <p class="description"  style="text-align: justify;">Ofrecer servicios de mantenimiento continuo y actualización de sitios web para garantizar un rendimiento óptimo, seguridad y actualización de contenido. Esto puede incluir copias de seguridad regulares, corrección de errores, actualización de plugins y monitoreo de seguridad.</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Our Services Section -->

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
