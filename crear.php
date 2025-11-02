<!-- Página de Contacto e Inicio de Sesión -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supermercado - Contacto</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"> -->


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

    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    
</head>
<body>
    <header class="bg-primary text-white text-center py-3">
        <img src="imagenes_web/logo-crc.png" alt="logo1-img" class="img-fluid">
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
                <a href="index.php" class="nav-link">Inicio <span class="sr-only">(current)</span></a>
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
                    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">
                    Iniciar Sesión
                    </button>-->  
                    <li><a href="crear.php" class="dropdown-item">Crear cuenta</a></li>
                </ul>
            </li>
        </ul>
        <form class="d-flex my-2 my-lg-0">
            <input class="form-control me-2" type="search" placeholder="Buscar producto" aria-label="Search">
            <button class="btn btn-outline-primary" type="submit">Buscar</button>
        </form>
    </div>
</nav>

            <!-- Modal -->
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
                <button type="submit" class="btn btn-success w-100">Iniciar Sesión</button>
                </form>
            </div>
            </div>
        </div>
        </div>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Crear Cuenta</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="nombre-apellido" class="form-label">Nombre y Apellido</label>
                                <input type="text" class="form-control" id="nombre-apellido">
                            </div>
                            <div class="mb-3">
                                <label for="ci" class="form-label">Cédula de Identidad</label>
                                <input type="text" class="form-control" id="ci">
                            </div>
                            <div class="mb-3">
                                <label for="correo" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control" id="correo">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="password">
                            </div>
                            <button type="submit" class="btn btn-success w-100">Crear Cuenta</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br><br><br><br><br>
    <br><br><br><br><br>
    <footer class="bg-dark text-white pt-5 pb-4">
    <div class="container">
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

        <!-- Newsletter Centro -->
        <div class="col-md-6 mb-4 text-center">
            <h6 class="fw-bold">NO TE PIERDAS NINGUNA NOVEDAD</h6>
            <p class="small">Recibe todas nuestras novedades y descuentos especiales en tu correo electrónico</p>
            <form class="d-flex justify-content-center">
            <input type="email" class="form-control w-50 rounded-pill me-2" placeholder="Ingresa tu correo electrónico" required>
            <button class="btn btn-success rounded-pill px-4" type="submit">Suscribir</button>
            </form>
        </div>

        <!-- Categorías Derecha -->
        <div class="col-md-3 mb-4">
            <ul class="list-unstyled mt-4 mt-md-0">
            <li>Limpieza del hogar</li>
            <li>Snacks & Dulces</li>
            <li>Fiambres & Embutidos</li>
            <li>Congelados</li>
            <li>Mascotas</li>
            </ul>
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
