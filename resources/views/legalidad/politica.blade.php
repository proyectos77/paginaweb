@extends('head')

<body class="page-index">

     @include('header')

     <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/inicio/acerca-denosotros.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">
        <!--ruta visor pdf -->
      <script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script> 

        <h2> politica de Privasidad</h2>
        <ol>
          <li>politica de pro</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->


    <section id="about" class="about" >
      <div class="container" data-aos="fade-up">

        <div class="row gy-4" data-aos="fade-up">
          <div class="col-lg-4">
          <img src="assets/img/nosotros/fondo-programacion.jpg" class="img-fluid" alt="imagen de fondo de header">
           
          </div>


          <div class="col-lg-8" >
            <div class="content ps-lg-5">
              <ol>
                <h2 style="text-align: justify;">Bienvenido a [Nombre de tu Proyecto]. Estos términos y condiciones describen las reglas y 
                    regulaciones para el uso del sitio web de [Nombre de tu Empresa], ubicado en [URL de tu Sitio].</h2>
              </ol>

              <ol>
                <h2 style="text-align: justify;">Bienvenido a [Nombre de tu Proyecto]. Estos términos y condiciones describen las reglas y 
                    regulaciones para el uso del sitio web de [Nombre de tu Empresa], ubicado en [URL de tu Sitio].</h2>
              </ol>
              
               <ul>
                <li><i class="bi bi-check-circle-fill" style="text-align: justify;"></i> <strong>1. Aceptación de los Términos:</strong> Al acceder a este sitio web, asumimos que aceptas estos términos y condiciones.</li>
                <li><i class="bi bi-check-circle-fill" style="text-align: justify;"></i><strong> Innovación:</strong> Promover la creatividad y la innovación en el desarrollo web, adoptando nuevas tecnologías y tendencias para ofrecer soluciones modernas y vanguardistas.</li>
                <li><i class="bi bi-check-circle-fill" style="text-align: justify;"></i> <strong>Orientación al cliente:</strong> Enfocarse en las necesidades del cliente y brindar un servicio personalizado y adaptado a cada cliente. Escuchar activamente, comprender sus objetivos y desafíos, y ofrecer soluciones que los ayuden a alcanzar el éxito.</li>
                <li><i class="bi bi-check-circle-fill"></i> Colaboración: Fomentar un ambiente de trabajo colaborativo, tanto internamente con el equipo de desarrollo web como con los clientes y socios comerciales. Trabajar en equipo para lograr los mejores resultados y aprovechar el conocimiento colectivo.</li> 
                <li><i class="bi bi-check-circle-fill"style="text-align: justify;"></i> <strong>Confianza y transparencia:</strong> Establecer relaciones basadas en la confianza mutua, la honestidad y la transparencia. Cumplir con los compromisos asumidos, ser claros en la comunicación y mantener la confidencialidad de la información del cliente.</li>
                <li><i class="bi bi-check-circle-fill"></i> Adaptabilidad: Ser flexible y adaptarse rápidamente a los cambios y desafíos del entorno digital en constante evolución. Estar dispuestos a aprender, mejorar y ajustar las estrategias y soluciones según las necesidades cambiantes del mercado.</li>
                <li><i class="bi bi-check-circle-fill"style="text-align: justify;"></i><strong> Responsabilidad social y ética: </strong>Actuar de manera ética y responsable, considerando el impacto social y medioambiental de las soluciones y servicios de desarrollo web. Cumplir con las leyes y regulaciones pertinentes y actuar de manera ética en todas las interacciones comerciales.</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->




  
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