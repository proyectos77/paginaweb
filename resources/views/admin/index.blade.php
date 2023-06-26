<!DOCTYPE html>
<html lang="en">
<head>

    @extends('head')
    @include('header')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<br><br><br><br>


<body class="fondo-admin">
    <section  id="listado" class="listado d-flex align-items-center">
        <div class="container">
            <div class="rwo">
                <div class="col-xl-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Teléfono</th>
                                <th>Correo Electrónico</th>
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
                </div>
            </div>
        </div>
    </section>  
    <section  id="totaluser" class="total-user" class="d-flex align-items-center">
        <div class="container">
            <div class="rwo">
                <div class="col-xl-12">
                    <p style="text-align: justify;"> Total de usuarios registrados: {{ $totalUsers }}</p>
                    <p style="text-align: justify;"> Porcentaje de usuarios registrados este mes: {{ $porcentajeMesActual }}%</p>
                    <p style="text-align: justify;"> Usuario más frecuente: {{ $usuarioMasFrecuente }}</p>
                </div>
            </div>
        </div>
    </section>  
    
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