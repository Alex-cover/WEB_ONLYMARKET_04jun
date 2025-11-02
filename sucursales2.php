<!-- Página de Sucursales -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleTabla.css">
    <title>Supermercado - Sucursales</title>
    <!-- <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css"> -->
        <!-- Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" id="bootstrap-style" />

        <!-- Material Icon Css -->
    <link rel="stylesheet" href="css/materialdesignicons.min.css" type="text/css" />
    
        <!-- Unicon Css -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    
        <!-- Swiper Css -->
    <link rel="stylesheet" href="css/tiny-slider.css" type="text/css" />
    <link rel="stylesheet" href="css/swiper.min.css" type="text/css" />
    
        <!-- Custom Css -->
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <!-- <link rel="stylesheet" href="css/style.min.css" type="text/css" /> -->   
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <header class="bg-primary text-white text-center py-3">
        <img src="imagenes_web/logo-suc.png" alt="logo1-img" class="img-fluid">
    </header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <a href="#" class="navbar-brand m-2">OnlyMarket</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto">
            <li class="nav-item active">
                <a href="index.php" class="nav-link">Inicio <span class="sr-only"></span></a>
            </li>
            
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">Descubre Nuestras</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a href="ofertas.php" class="dropdown-item">Ofertas</a></li>
                    <li><a href="novedades.php" class="dropdown-item">Novedades</a></li>
                    
                    <li><a href="sucursales2.php" class="dropdown-item">Sucursales</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a href="contacto.php" class="dropdown-item">Contactos</a></li>

                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">Cuenta</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                   <li><a type="button" data-bs-toggle="modal" data-bs-target="#loginModal" class="dropdown-item">Iniciar sesión</a></li>
                    <!-- Botón para abrir el modal -->
                     <!-- <button type="button" class="btn btn-white" data-bs-toggle="modal" data-bs-target="#loginModal">
                    Iniciar Sesión
                    </button> -->
                    <li><a href="crear.php" class="dropdown-item">Crear cuenta</a></li>
  
                </ul>
            </li>
        </ul>
        <form class="d-flex my-2 my-lg-0 mx-2">
            <input class="form-control me-2" type="search" placeholder="Buscar producto" aria-label="Search">
            <button class="btn btn-outline-primary" type="submit">Buscar</button>
        </form>
    </div>
</nav>

        <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content shadow">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Iniciar Sesión</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <form>
                <div class="mb-3">
                    <label for="login-email" class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" id="login-email" required>
                </div>
                <div class="mb-3">
                    <label for="login-password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="login-password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
                </form>
            </div>
            </div>
        </div>
        </div>

    <!-- Tabla de sucursales -->
<div class="container mt-5">
  <h3 class="text-center mb-4">Nuestras Sucursales</h3>
  <div class="container">
    <table class="table-fluid">
      <thead>
        <tr>
          <th>Sucursal</th>
          <th>Dirección</th>
          <th>Email</th>
          <th>Teléfono</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>El Alto</td>
          <td>Carretera Copacabana, Multicine Río Seco</td>
          <td>central@onlymarket.com</td>
          <td>72073726</td>
        </tr>
        <tr>
          <td>La Paz</td>
          <td>Av. Juan Pablo II, El Alto</td>
          <td>norte@onlymarket.com</td>
          <td>76570670</td>
        </tr>
        <tr>
          <td>Cochabamba</td>
          <td>Av. Ballivián, Zona Sur</td>
          <td>sur@onlymarket.com</td>
          <td>72345678</td>
        </tr>
        <tr>
          <td>Santa Cruz</td>
          <td>Av. Mariscal Santa Cruz #456</td>
          <td>centro@onlymarket.com</td>
          <td>70123456</td>
        </tr>
        <tr>
          <td>Oruro</td>
          <td>Av. Busch esq. Díaz Romero</td>
          <td>miraflores@onlymarket.com</td>
          <td>71543210</td>
        </tr>
        <tr>
          <td>Achumani</td>
          <td>Calle 22, Achumani</td>
          <td>achumani@onlymarket.com</td>
          <td>70707070</td>
        </tr>
        <tr>
          <td>Calacoto</td>
          <td>Av. Arequipa, Calacoto</td>
          <td>calacoto@onlymarket.com</td>
          <td>78888888</td>
        </tr>
        <tr>
          <td>Villa Fátima</td>
          <td>Av. Las Américas, Villa Fátima</td>
          <td>fatima@onlymarket.com</td>
          <td>76667777</td>
        </tr>
        <tr>
          <td>Zona Franca</td>
          <td>Zona Franca, El Alto</td>
          <td>zonafranca@onlymarket.com</td>
          <td>75554444</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<script src="pruebaTabla.js"></script>

<div class="container mt-4">
        <h2 class="text-center">Ubicación de Sucursales</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <iframe class="w-100" height="100%" width="90%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d321.81204358477083!2d-68.20394621946716!3d-16.49138222148832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915edfc7d1d6f94f%3A0x478bc864c5e458ce!2sHipermaxi!5e0!3m2!1ses!2sbo!4v1743374370089!5m2!1ses!2sbo" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <h5 class="card-title">Sucursal Central</h5>
                        <p class="card-text">Dirección: El Alto - Carretera Copacabana - Rio Seco - Multicine</p>
                        <p class="card-text">Teléfono: 72073726</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <iframe class="w-100" height="100%" width="90%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d239.0979674465385!2d-68.18467591641294!3d-16.497424405477602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915edfe92f65ce9d%3A0xc7a37cf0132aa5d7!2sImportadora%20de%20Vidrios%20San%20Francisco%20Glass!5e0!3m2!1ses!2sbo!4v1743374435080!5m2!1ses!2sbo" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <h5 class="card-title">Sucursal Norte</h5>
                        <p class="card-text">Dirección: Av Juan Pablo II, El Alto</p>
                        <p class="card-text">Teléfono: 76570670</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br>
    <br><br><br><br><br>
    <footer class="bg-dark text-white pt-5 pb-4">
        <div class="container pb-4">
            <div class="row text-center text-md-start">
    
            <!-- Categorías Izquierda -->
            <div class="col-md-3 mb-4">
                <h6 class="fw-bold">CATEGORÍAS</h6>
                <ul class="list-unstyled">
                <li>Bebidas & Licores</li>
                <li>Lácteos</li>
                <li>Panadería & Repostería</li>
                <li>Despensa & Abarrotes</li>
                <li>Cuidado Personal</li>
                <li>Bebés</li>
                </ul>
            </div>
            
    
            <!-- Centro -->
            <div class="col-md-6 mb-4 text-center">
                <h6 class="fw-bold">NO TE PIERDAS NINGUNA NOVEDAD</h6>
                <p class="small">Recibe todas nuestras novedades y descuentos especiales en tu correo electrónico</p>
                <form class="d-flex justify-content-center">
                <input type="email" class="form-control w-50 rounded-pill me-2" placeholder="Ingresa tu correo electrónico" required>
                <button class="btn btn-danger rounded-pill px-4" type="submit">Suscribir</button>
                </form>
            </div>
    
            <!-- Categorías Derecha -->
            <div class="col-md-3 mb-4">
                
                <i class="uil uil-whatsapp fs-2 text-danger"></i>
                        
                    <strong>CONTACTOS:</strong>
                    <p class="mb-0">800 500 220</p>
                    <p class="mb-0">76207802 - 78781095</p>
                    <p class="mb-1">También puedes contactarnos en:</p>
                                <a href="#" class="me-2">Facebook</a>
                                <a href="#" class="me-2">YouTube</a>
                                <a href="#" class="me-2">Instagram</a> 
                            
                <img src="imagenes_web/logo_naranja.png" alt="Logo OnlyMarket" class="list-unstyled mt-4 mt-md-0" style="max-height: 45px;">
            </div>
            </div>
           
        </div>
        </footer>
        


        <!--Bootstrap Js-->
    <!-- <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script> -->

    <!-- Slider Js -->
    <script src="js/tiny-slider.js"></script>
    <script src="js/swiper.min.js"></script>

    <!-- counter -->
    <script src="js/counter.init.js"></script>

    <!-- App Js -->
    <script src="js/app.js"></script>


    <script>
        var slider = tns({
            container: '.client-slider',
            loop: true,
            autoplay: true,
            mouseDrag: true,
            controls: false,
            navPosition: "bottom",
            nav: true,
            autoplayTimeout: 4000,
            speed: 900,
            animateIn: "fadeIn",
            animateOut: "fadeOut",
            controlsText: ['&#8592;', '&#8594;'],
            autoplayButtonOutput: false,
            gutter: 30,
            responsive: {

                992: {
                    gutter: 30,
                    items: 1.5
                },

            }
        });

    </script>

    <script>
        new Swiper('.swiper-container', {
            loop: true,
            slidesPerView: 1,
            paginationClickable: true,
            spaceBetween: 20,
            pagination: '.swiper-pagination',
            slidesPerView: 'auto',
            paginationClickable: true,
            spaceBetween: 0,
            centeredSlides: true,
            speed: 1500,
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
        });
    </script>


    <script>
        var slider = tns({
            container: '.testi-slider',
            loop: true,
            autoplay: true,
            mouseDrag: true,
            controls: true,
            navPosition: "bottom",
            nav: false,
            autoplayTimeout: 4000,
            speed: 900,
            animateIn: "fadeIn",
            animateOut: "fadeOut",
            controlsText: ['&#8592;', '&#8594;'],
            autoplayButtonOutput: false,
            gutter: 30,
            responsive: {

                992: {
                    gutter: 30,
                    items: 3
                },

            }
        });

    </script>
</body>
</html>
