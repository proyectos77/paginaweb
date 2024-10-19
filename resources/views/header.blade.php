  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="mi-ruta" class="logo d-flex align-items-center" class="empresa">
        <img src="assets/img/logo-pagina.jpg" alt="">
        <h1  class="nombre-empresa" class="d-flex align-items-center">WebTailor Solutions S.A.S</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{ route('home') }}" class="active">Inicio</a></li>
          <li><a href="{{ route('about') }}" class="active">Quienes Somos</a></li>
          <li><a href="contact" class="active" >Contacto</a></li>
          <li><a href="admin" class="active" >admin</a></li>
         
          <!--<li><a href="admin" class="active" >Admin</a></li>
            <li><a href="{{ route('portfolio-details') }}" class="active" >Portafolio</a></li>
            <li><a href="{{ route('services') }}" class="active">Servicio</a></li>
          -->
          <li class="dropdown"><a href="{{ route('services') }}" class="active">
            <span>Servicio</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Diseño se Páginas Web</a></li>
              <li class="dropdown"><a href="#"><span>Diseño se Páginas Web</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
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
          </li>
        </ul>
      </nav>


      

    </div>

    
  </header><!-- End Header -->
