  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo-pagina.jpg" alt="">
        <h1  class="nombre-empresa" class="d-flex align-items-center">WebTech Solutions</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{ route('home') }}">Inicio</a></li>
          <li><a href="{{ route('about') }}">Cerca de Nosotros</a></li>
          <li><a href="{{ route('services') }}">Servicio</a></li>
          <li><a href="{{ route('portfolio-details') }}">Portfolio</a></li>
          <li><a href="contact" class="active" >Contacto</a></li>
          {{-- <li><a href="testimonio" class="active" >Testimonio</a></li> --}}
          <!-- {{--<li><a href="{{ route('team') }}">Team</a></li>
          <li><a href="{{ route('blog') }}">Blog</a></li> --}}
          {{-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li> --}} -->
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
