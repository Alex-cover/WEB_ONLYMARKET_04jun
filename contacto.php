<!-- Página de Contacto -->
<?php
session_start();
include "config.php";
$usuario_logueado = isset($_SESSION['usuario']);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supermercado - Contacto</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" id="bootstrap-style" />


    <!-- Material Icon Css -->
    <link rel="stylesheet" href="css/materialdesignicons.min.css" type="text/css" />

    <!-- Unicon Css -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

    <!-- Swiper Css -->
    <link rel="stylesheet" href="css/tiny-slider.css" type="text/css" />
    <link rel="stylesheet" href="css/swiper.min.css" type="text/css" />

    <!-- Custom Css -->
    <link rel="stylesheet" href="css/style.min.css" type="text/css" />
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>


</head>

<body>
    <header class="bg-primary text-white text-center py-3">
        <img src="imagenes_web/logo-con.png" alt="logo1-img" class="img-fluid">
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
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo $usuario_logueado ? $_SESSION['usuario']['nombre'] : 'Cuenta'; ?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php if ($usuario_logueado): ?>
                            <li><a href="perfil.php" class="dropdown-item">Mi Perfil</a></li>
                            <li><a href="carrito.php" class="dropdown-item">Carrito</a></li>
                            <li><a href="pedidos.php" class="dropdown-item">Mis Pedidos</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a href="logout.php" class="dropdown-item">Cerrar Sesión</a></li>
                        <?php else: ?>
                            <li><a type="button" data-bs-toggle="modal" data-bs-target="#loginModal" class="dropdown-item">Iniciar sesión</a></li>
                            <li><a href="crear.php" class="dropdown-item">Crear cuenta</a></li>
                        <?php endif; ?>
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
                        <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="container mt-4">
        
        <h2 class="text-center">¡Comunícate con nosotros!</h2>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Mensaje</label>
                        <textarea class="form-control" id="message" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div> -->

    <!-- Contacto Mejorado -->
    <div class="container mt-5">
        <!-- Buscador -->
        <div class="input-group mb-4 shadow rounded">
            <input type="text" class="form-control py-2" placeholder="Escribe aquí tu pregunta" aria-label="Buscar">
            <button class="btn btn-dark" type="button">
                <i class="uil uil-search"></i> Buscar
            </button>
        </div>

        <!-- Sección de tarjetas -->
        <div class="row g-4">
            <!-- Formulario de contacto -->
            <div class="col-md-6">
                <div class="card shadow p-4">
                    <h5 class="mb-4 text-primary">Formulario de Contacto</h5>
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="name" placeholder="Tu nombre completo">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" placeholder="tucorreo@ejemplo.com">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Mensaje</label>
                            <textarea class="form-control" id="message" rows="4" placeholder="Escribe tu mensaje..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Enviar Mensaje</button>
                    </form>
                </div>
            </div>

            <!-- Información de contacto -->
            <div class="col-md-6">
                <div class="card shadow p-4">
                    <h5 class="mb-4 text-primary">Otras formas de contacto</h5>
                    <div class="d-flex flex-column gap-3">
                        <div class="d-flex align-items-start gap-3">
                            <i class="uil uil-headphones-alt fs-2 text-danger"></i>
                            <div>
                                <p class="mb-1">Te atendemos de lunes a domingo de <strong> 7:00 am - 22:30 pm.</strong></p>
                                <strong class="text-danger">800 500 220</strong><br>
                                <small>(Gratuito)</small><br>
                                <strong class="text-danger">76207802 - 78781095</strong><br>

                            </div>
                        </div>
                        <div class="d-flex align-items-start gap-3">
                            <i class="uil uil-whatsapp fs-2 text-danger"></i>
                            <div>
                                <strong>¡Hola soy Esther, tu asistente virtual de WhatsApp!</strong>
                                <p class="mb-0">¿En qué puedo ayudarte?</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start gap-3">
                            <i class="uil uil-envelope fs-2 text-danger"></i>
                            <div>
                                <p class="mb-1">Haznos llegar tus comentarios a través de este formulario o escribenos a nuestro correo:<a href="#"> onliMarket@gmail.com</a>.</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start gap-3">
                            <i class="uil uil-share-alt fs-2 text-danger"></i>
                            <div>
                                <p class="mb-1">También puedes contactarnos en:</p>
                                <a href="#" class="me-2">Facebook</a>
                                <a href="#" class="me-2">YouTube</a>
                                <a href="#" class="me-2">Instagram</a>

                            </div>
                        </div>
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

                <!-- Newsletter Centro -->
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