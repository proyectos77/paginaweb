@extends('head')

<body class="page-index">

    @include('header')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-xl-4">
          <br><br>
          <h5 class="color-texto"  data-aos="fade-up"> Desarrollo Web Personalizado</h5>
          <br>
          <blockquote data-aos="fade-up" data-aos-delay="100">
            <p>Lleva tu Negocio al Mundo Digital con una Página Web a la Medida.</p>
          </blockquote>
          <br><br>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="contact" class="btn-get-started">Dejanos tu Contacto</a>
            {{-- <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> --}}
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">

    <!-- ======= Why Choose Us Section ======= -->
    
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Por qué elegirnos</h2>

        </div>
        <div>
         

        <div class="row g-0" data-aos="fade-up" data-aos-delay="200">

          <div class="col-xl-5 img-bg" style="background-image: url('{{ asset('assets/img/nosotros/photo.jpg') }}')"></div>
          <div class="col-xl-7 slides  position-relative">

            <div class="slides-1 swiper">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Te ofrecemos nuetro mejor servicio</h3>
                    <h4 class="mb-3">Cuales serian las garantías para contar con una página wed para tu negocio.</h4>
                    <p>No pierdas la oportunidad de destacar en el mercado digital. Permítenos crear una página web que refleje la esencia de tu negocio, te ayude a alcanzar tus metas y genere resultados tangibles. ¡Contáctanos hoy mismo para dar el primer paso hacia una presencia en línea exitosa y rentables!</p>
                  </div>
                </div>
                <!-- End slide item -->

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Te ayudamos</h3>
                    <h4 class="mb-3"> A tener una presencia en línea sólida es esencial para el crecimiento y el éxito de cualquier negocio.</h4>
                    <p>Una página web bien diseñada y funcional puede abrir nuevas puertas de oportunidad, aumentar la visibilidad de tu marca y atraer a un público más amplio.</p>
                  </div>
                </div>
                <!-- End slide item -->

                {{-- <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Aliquid non alias minus</h3>
                    <h4 class="mb-3">Necessitatibus voluptatibus explicabo dolores a vitae voluptatum.</h4>
                    <p>Neque voluptates aut. Soluta aut perspiciatis porro deserunt. Voluptate ut itaque velit. Aut consectetur voluptatem aspernatur sequi sit laborum. Voluptas enim dolorum fugiat aut.</p>
                  </div>
                </div>
                <!-- End slide item --> --}}

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

    <!-- ======= Our Services Section ======= -->
    <section id="services-list" class="services-list">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Nuestros Servicios</h2>

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
              <p class="description"  style="text-align: justify;">Implementación de estrategias y técnicas de SEO para mejorar la visibilidad y el posicionamiento de los sitios web en los motores de búsqueda. Esto incluye optimización de palabras clave, generación de contenido relevante, mejora de la estructura del sitio y estrategias de construcción de enlaces.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
            <div class="icon flex-shrink-0"><i class="bi bi-brightness-high" style="color: #f5cf13;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Consultoría y Asesoramiento</a></h4>
              <p class="description" style="text-align: justify;"> Brindar asesoramiento personalizado y consultoría a los clientes en relación con sus necesidades específicas de desarrollo web. Esto puede incluir análisis de requisitos, selección de tecnologías adecuadas, estrategias de marketing digital y recomendaciones de mejora.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="600">
            <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week" style="color: #1335f5;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Mantenimiento y Actualización de Sitios Web</a></h4>
              <p class="description" style="text-align: justify;">Ofrecer servicios de mantenimiento continuo y actualización de sitios web para garantizar un rendimiento óptimo, seguridad y actualización de contenido. Esto puede incluir copias de seguridad regulares, corrección de errores, actualización de plugins y monitoreo de seguridad.</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- End Our Services Section -->

    <!-- ======= Call To Action Section ======= -->
    {{-- <section id="call-to-action" class="call-to-action">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h3>Ut fugiat aliquam aut non</h3>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
            <a class="cta-btn" href="#">Llamada a la acción</a>
          </div>
        </div>

      </div>
    </section>
    
    <!-- End Call To Action Section --> --}}

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
            <h3>Potentes funciones <br>para su negocio</h3>

            <div class="row gy-4">

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="ri-store-line" style="color: #ffbb2c;"></i>
                  <span>Presencia en línea</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
                  <span>Aumento de visibilidad de tus productos</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
                  <span>Generación de nuevas ventas</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
                  <span>Credibilidad y confianza</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="ri-database-2-line" style="color: #47aeff;"></i>
                  <span>Calificación en calidad del producto</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
                  <span>Calificación en atención del servicio</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
                  <span>Ahorro de costos a largo plazo</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="ri-base-station-line" style="color: #ff5828;"></i>
                  <span>Expansión del alcance geográfico</span>
                </div>
              </div><!-- End Icon List Item-->
            </div>
          </div>
          <div class="col-lg-5 position-relative" data-aos="fade-up" data-aos-delay="200">
            <div class="phone-wrap">
              <img src="{{ asset('assets/img/nosotros/fondo3.jpg') }}" alt="Image" class="img-fluid">
            </div>
          </div>
        </div>

      </div>
{{-- 
      <div class="details">
        <div class="container" data-aos="fade-up" data-aos-delay="300">
          <div class="row">
            <div class="col-md-6">
              <h4>Labore Sdio Lidui<br>Bonde Naruto</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam nostrum molestias doloremque quae delectus odit minima corrupti blanditiis quo animi!</p>
              <a href="#about" class="btn-get-started">Get Started</a>
            </div>
          </div>
        </div>
      </div> --}}

    </section><!-- End Features Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    {{-- <section id="recent-posts" class="recent-posts">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Entradas recientes del blog</h2>

        </div>

        <div class="row gy-5">

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="post-box">
              <div class="post-img"><img src="{{ asset('assets/img/blog/blog-1.jpg') }}" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">Tue, December 12</span>
                <span class="post-author"> / Julia Parker</span>
              </div>
              <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis</h3>
              <p>Illum voluptas ab enim placeat. Adipisci enim velit nulla. Vel omnis laudantium. Asperiores eum ipsa est officiis. Modi qui magni est...</p>
              <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="post-box">
              <div class="post-img"><img src="{{ asset('assets/img/blog/blog-2.jpg') }}" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">Fri, September 05</span>
                <span class="post-author"> / Mario Douglas</span>
              </div>
              <h3 class="post-title">Et repellendus molestiae qui est sed omnis</h3>
              <p>Voluptatem nesciunt omnis libero autem tempora enim ut ipsam id. Odit quia ab eum assumenda. Quisquam omnis doloribus...</p>
              <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="post-box">
              <div class="post-img"><img src="{{ asset('assets/img/blog/blog-3.jpg') }}" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">Tue, July 27</span>
                <span class="post-author"> / Lisa Hunter</span>
              </div>
              <h3 class="post-title">Quia assumenda est et veritati</h3>
              <p>Quia nam eaque omnis explicabo similique eum quaerat similique laboriosam. Quis omnis repellat sed quae consectetur magnam...</p>
              <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="post-box">
              <div class="post-img"><img src="{{ asset('assets/img/blog/blog-4.jpg') }}" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">Tue, Sep 16</span>
                <span class="post-author"> / Mario Douglas</span>
              </div>
              <h3 class="post-title">Pariatur quia facilis similique deleniti</h3>
              <p>Et consequatur eveniet nam voluptas commodi cumque ea est ex. Aut quis omnis sint ipsum earum quia eligendi...</p>
              <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Recent Blog Posts Section --> --}}

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
