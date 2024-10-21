@extends('head')

<body class="page-index">

     @include('header')

     <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/inicio/acerca-denosotros.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">
        <!--ruta visor pdf -->
      <script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script> 

        <h2> Administracón</h2>
        <ol>
          <li>Administracón</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <section  id="listado" class="listado d-flex align-items-center" class="fondo-admin">
        <div class="container">
            <div class="rwo">
                <div class="col-xl-12" >
                    <table class="table" style="background-color: #2c9090; color: white; " >
                        <thead >
                            <tr style="background-color: #2c9090; color: white; " >
                                <th>Nombre</th>
                                <th>Teléfono</th>
                                <th>Correo Elect rónico</th>
                                <th>Empresa</th>
                                <th>Comentario</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($clientes as $cliente)
                                <tr>
                                    <td>{{ $cliente->nombre }}</td>
                                    <td>{{ $cliente->telefono }}</td>
                                    <td>{{ $cliente->correo_electronico }}</td>
                                    <td>{{ $cliente->empresa }}</td>
                                    <td>{{ $cliente->comentario }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        
                    </table>
                    <!-- formualrio para subir archivo desdela vista admin -->
                       <form method="POST" action="{{ route('subir') }}" accept-charset="UTF-8" enctype="multipart/form-data">
    {{ csrf_field() }}
    <label for="archivo"><b>Archivo: </b></label><br>
    <input type="file" name="archivo" required>
    <input class="btn btn-success" type="submit" value="Enviar">
</form>

     

                        @if (session('success'))
                           <div class="alert alert-success">
                       {{ session('success') }}
                          </div>
                           @endif

                        @if (session('error'))
                          <div class="alert alert-danger">
                        {{ session('error') }}
                          </div>
                        @endif
              </div>
            </div>
        </div>
    </section>  
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
    <!-- <section  id="totaluser" class="total-user" class="d-flex align-items-center" >
        <div class="container">
            <div class="rwo">
                <div class="col-xl-4">
                    <p style="text-align: justify;"> Total de usuarios registrados: {{ $totalUsers }}</p>
                    <p style="text-align: justify;"> Porcentaje de usuarios registrados este mes: {{ $porcentajeMesActual }}%</p>
                    <p style="text-align: justify;"> Usuario más frecuente: {{ $usuarioMasFrecuente }}</p>
                    
                </div>
            </div>
            
        </div>
    </section>   -->
    
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