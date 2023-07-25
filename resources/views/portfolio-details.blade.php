@extends('head')

<body class="page-portfolio">

    @include('header')

   <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('assets/img/portafolio/portafolio-header.jpg') }}');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Portafolio</h2>
        <ol>
          <li>Portafolio</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="slides-1 portfolio-details-slider swiper" class="content ps-lg-5"> 
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <h4 class="title"> <a href="#" class="stretched-link">Proyecto Desarrollado en Laravel</a></h4>
                  <p class="description" style="text-align: justify;">
                    Este proyecto fue desarrollado utilizando el framework Laravel, una herramienta de desarrollo web robusta y eficiente que ha demostrado ser una excelente opción para la creación de aplicaciones web modernas y escalables.
                  </p>
                </div>

                <div class="swiper-slide">
                  <h4 class="title"> <a href="#" class="stretched-link">Ventajas de utilizar Laravel</a></h4>
                  <p class="description" style="text-align: justify;">
                    Laravel ofrece numerosas ventajas que hacen que el desarrollo de aplicaciones web sea más rápido y eficiente. Algunas de las ventajas clave de Laravel incluyen:
                  </p>
                  <li><i class="bi bi-check-circle-fill" style="text-align: justify;"></i> <strong>Arquitectura MVC:</strong>  Laravel sigue una arquitectura Modelo-Vista-Controlador (MVC), lo que facilita la separación de la lógica de negocio y la presentación de la aplicación.</li>
                  <li><i class="bi bi-check-circle-fill" style="text-align: justify;"></i> <strong>Facilidad de desarrollo:</strong> Gracias a su sintaxis elegante y expresiva, Laravel simplifica la codificación y mejora la productividad del desarrollador.</li>
                  <li><i class="bi bi-check-circle-fill" style="text-align: justify;"></i> <strong>Eloquent ORM:</strong>Laravel proporciona un ORM (Mapeo Objeto-Relacional) llamado Eloquent, que simplifica las operaciones de base de datos y agiliza el desarrollo al ofrecer una forma sencilla de interactuar con la base de datos.</li>
                  <li><i class="bi bi-check-circle-fill" style="text-align: justify;"></i> <strong>Sistema de enrutamiento limpio:</strong>Laravel ofrece un sistema de enrutamiento limpio y fácil de usar, lo que permite definir rutas de manera clara y estructurada. <li>
                  <li><i class="bi bi-check-circle-fill" style="text-align: justify;"></i> <strong>Autenticación incorporada:</strong>  Laravel cuenta con un sistema de autenticación incorporado que facilita la implementación de la autenticación y la autorización en las aplicaciones web.</li>
                  <li><i class="bi bi-check-circle-fill" style="text-align: justify;"></i> <strong>Amplio ecosistema:</strong>Laravel cuenta con una amplia comunidad de desarrolladores y una gran cantidad de paquetes y complementos disponibles, lo que permite extender y personalizar fácilmente las funcionalidades de la aplicación.</li>
                </div>

                <div class="swiper-slide">
                  <h4 class="title"> <a href="#" class="stretched-link">Importancia de las IP</a></h4>
                  <p class="description" style="text-align: justify;">
                    En el desarrollo web, las direcciones IP (Protocolo de Internet) juegan un papel fundamental. Las IP permiten identificar y comunicarse con dispositivos conectados a Internet. En el contexto de un proyecto desarrollado en Laravel, la gestión adecuada de las IP puede ser crucial en varios aspectos
                  </p>
                  <li><i class="bi bi-check-circle-fill" style="text-align: justify;"></i> <strong>Seguridad:</strong>Al controlar y verificar las direcciones IP, se pueden implementar medidas de seguridad como restricciones de acceso o autenticación basada en IP para proteger la aplicación de accesos no autorizados.</li>
                  <li><i class="bi bi-check-circle-fill" style="text-align: justify;"></i> <strong>Análisis y monitoreo:</strong> El análisis de las IP puede proporcionar información valiosa sobre el tráfico y los patrones de uso de la aplicación, lo que ayuda en la toma de decisiones y en la mejora continua.</li>
                  <li><i class="bi bi-check-circle-fill" style="text-align: justify;"></i> <strong>Personalización y localización:</strong>Las IP pueden utilizarse para personalizar la experiencia del usuario y ofrecer contenido adaptado a su ubicación geográfica.</li>
                </div>
            
                <div class="swiper-slide">
                  <h4 class="title"> <a href="#" class="stretched-link">Historia de Laravel</a></h4>
                  <p class="description" style="text-align: justify;">
                    Laravel es un framework de código abierto que fue lanzado por primera vez en 2011 por Taylor Otwell. Desde su creación, Laravel ha ganado una amplia popularidad debido a su elegancia, facilidad de uso y su creciente ecosistema de desarrollo. A lo largo de los años, Laravel ha evolucionado y ha añadido nuevas funcionalidades, mejoras de rendimiento y herramientas para facilitar el desarrollo web. La comunidad activa y comprometida que rodea a Laravel ha contribuido a su éxito y ha permitido que el framework se mantenga actualizado y en constante mejora.
                  </p>
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h4 class="title"> <a href="#" class="stretched-link">Información del Proyecto</a></h4>
              <ul>
                <li><strong>Categoria</strong>: Desarrollo web</li>
                <li><strong>Fecha del proyecto</strong>: 30 junio, 2023</li>
                <li><strong>URL del proyecto</strong>: <a href="#">https://gperez.labmatamoros.info</a></li>
              </ul>
            </div>
          </div>

        </div>

      </div>
      
    </section><!-- End Portfolio Details Section -->

   <!-- sesion se comentarios -->

    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
        <div class="row g-5">
          <h4 class="title"> <a href="#" class="stretched-link">Clientes Satifechos</a></h4>
          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
            <div class="post-author d-flex align-items-center">
                <img src="{{ asset('assets/img/blog/blog-author.jpg') }}" class="rounded-circle flex-shrink-0" alt="">
                <div>
                  <h4>Jane Smith</h4>
                  <div class="social-links">
                  <a href="https://twitter.com/#"><i class="bi bi-twitter"></i></a>
                  <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                  <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                </div>
                <p>
                  La integración de Laravel en nuestro proyecto fue fundamental para ofrecer una experiencia de usuario excepcional. Las ventajas de Laravel, como su sistema de autenticación incorporado y su amplio ecosistema de paquetes, nos permitieron implementar funcionalidades avanzadas y personalizadas que hicieron que nuestra aplicación se destacara.
                </p>
              </div>
          </div>

          <div class="post-author d-flex align-items-center">
            <img src="{{ asset('assets/img/blog/comments-1.jpg') }}" class="rounded-circle flex-shrink-0" alt="">
            <div>
              <h4>Jamim Sonteo</h4>
              <div class="social-links">
              <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
              <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
              <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
            </div>
            <p>
              Estamos impresionados con la experiencia del equipo en el desarrollo de Laravel. Su conocimiento profundo del framework y su habilidad para utilizar características avanzadas, como Eloquent ORM y el sistema de enrutamiento, nos permitió crear una aplicación web robusta y de alta calidad en un tiempo récord.
            </p>
          </div>
      </div>
      <div class="post-author d-flex align-items-center">
        <img src="{{ asset('assets/img/blog/comments-2.jpg') }}" class="rounded-circle flex-shrink-0" alt="">
        <div>
          <h4>Sail Fernen</h4>
          <div class="social-links">
          <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
          <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
          <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
        </div>
        <p>
          El proyecto desarrollado en Laravel superó nuestras expectativas en términos de rendimiento y funcionalidad. Gracias a la estructura MVC y las características de Laravel, pudimos crear una aplicación web rápida y escalable que se adaptó perfectamente a nuestras necesidades.
        </p>
      </div>
  </div>
        </div>
      </div>
    </section><!-- End Blog Details Section -->

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
