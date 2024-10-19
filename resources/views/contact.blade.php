@extends('head')

<body class="page-contact">

    @include('header')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/contacto/contact-header.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Contacto</h2>
        <ol>
          <li>Contacto</li>
        </ol>

      </div>
    </div>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container position-relative" data-aos="fade-up">
        <div class="row gy-4 d-flex justify-content-end">
          <!-- informacion de contacto -->
          <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">

            <div class="info-item d-flex">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h4>Ubicación:</h4>
                <p>Geovanni Pérez Polo<br> Bogotá D.C - Colombia</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h4>Email:</h4>
                <p>Perez1991polo@gmail.com</p>
                <p>Pjhovanysperezpolo@gmail.com</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-phone flex-shrink-0"></i>
              <div>
                <h4>Llamar:</h4>
                <p>+57- 312-492-6898</p>
              </div>
            </div>
          </div>

        
            <!-- formualrio de contacto -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
              <div class="container mt-5">
              <div class="card ">
                <div class="card-header text-center" style="background-color: #2c9090; color: white; ">
                    <h4 class="mb-0 ">Formulario de Registro</h4>
                </div>
              <div class="card-body" style="background-color: #2c9090; color: white;" >
                <form action="/clientes" method="POST" role="form" class="php-email-form" >
                  @csrf
                  <div class="row">
                      <div class="col-md-6 form-group" >
                          <div >Nombres y Apellidos</div>
                          <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre" required style="border-radius: 8px;">   
                      </div>
                      
                      <div class="col-md-6 form-group">
                          <div>Teléfono</div>
                          <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingrese su número de teléfono" required style="border-radius: 8px;">
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-6 form-group mt-3 mt-md-0">
                          <div>Correo Electrónico</div>
                          <input type="email" class="form-control" id="correo_electronico" name="correo_electronico" placeholder="Ingrese su Email" required style="border-radius: 8px;">
                      </div>
                      <div class="col-md-6 form-group">
                          <div>Nombre de la Empresa</div>
                          <input type="text" class="form-control" id="empresa" name="empresa" placeholder="Ingrese Nombre de la Empresa" required style="border-radius: 8px;">
                      </div>
                  </div>
                  <div class="form-group mt-3">
                      <div>Escriba su Comentario </div>
                      <textarea class="form-control" id="comentario" name="comentario" rows="2" placeholder="Escriba un comentario" required style="border-radius: 8px;"></textarea>
                  </div>
                  <div class="text-center">
                      <button id="submit-button" class="btn btn-primary" type="submit">Guardar</button>
                      <div id="mensaje-guardado" class="mensaje-guardado oculto"></div>
                  </div>
                </form>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  @include('footer')

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

 
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  {{-- <script src="public/js/formulario.js"></script> --}}
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  {{-- <script src="assets/vendor/php-email-form/validate.js"></script> --}}


  <!-- Template Main JS File -->
      <script src="assets/js/main.js"></script>
   <!-- Importar el archivo JavaScript -->
   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   @include('sweetalert::alert')
</body>

</html>
