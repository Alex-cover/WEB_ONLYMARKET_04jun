<?php

session_start();
include "config.php";
$usuario_logueado = isset($_SESSION['usuario']);
$queryCategorias = "SELECT * FROM categorias";
$queryProductos = "SELECT * FROM productos";
$categorias = mysqli_query($conn, $queryCategorias);
$productos = mysqli_query($conn, $queryProductos);

$obtener_categorias = "SELECT id_categoria, nombre_categoria FROM categorias ORDER BY nombre_categoria ASC";
$resultado_categorias = mysqli_query($conn, $obtener_categorias);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supermercado Online</title>

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" id="bootstrap-style" />

    <!-- Material Icon Css -->
    <link rel="stylesheet" href="css/materialdesignicons.min.css" type="text/css" />
    <link rel="stylesheet" href="css/materialdesignicons.min.css">
    <!-- Unicon Css -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

    <!-- Swiper Css -->
    <link rel="stylesheet" href="css/tiny-slider.css" type="text/css" />
    <link rel="stylesheet" href="css/swiper.min.css" type="text/css" />

    <!-- Custom Css -->
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <!-- <link rel="stylesheet" href="css/style.min.css" type="text/css" /> -->

    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">


    <style>
        body {
            background-color: #f8f9fa;
        }

        .background-wrapper {
            background-image: url('imagenes_web/chica_fondo.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: right bottom;
            background-attachment: fixed;
            /* para que no se mueva al hacer scroll */
            min-height: 100vh;
            position: relative;
            z-index: 1;
        }

        .background-wrapper>* {
            position: relative;
            z-index: 2;
            background-color: rgba(255, 255, 255, 0.9);
            /* Fondo blanco semi-transparente para legibilidad */
            border-radius: 8px;
            padding: 10px;
        }

        .chica-superpuesta {
            position: absolute;
            left: 0;
            bottom: 0;
            z-index: 1;
            width: 250px;
            /* Ajusta según necesites */
        }

        @media (max-width: 1284px) {
            .chica-superpuesta {
                position: absolute;
                left: -55px;

                bottom: 0;
                z-index: 1;
                width: 250px;
                /* Ajusta según necesites */
            }
        }

        @media (max-width: 1999px) {
            .chica-superpuesta {
                position: absolute;
                bottom: 0;
                z-index: 1;
                width: 250px;
                /* Ajusta según necesites */
            }
        }

        /*que paso*/
        @media (max-width: 1114px) {
            .chica-superpuesta {
                position: absolute;
                bottom: 0;
                z-index: 1;
                width: 250px;
                /* Ajusta según necesites */
            }
        }

        @media (max-width: 884px) {
            .chica-superpuesta {
                position: absolute;
                left: -100px;
                bottom: 0;
                z-index: 1;
                width: 250px;
                /* Ajusta según necesites */
            }
        }

        @media (max-width: 450px) {
            .chica-superpuesta {
                position: absolute;
                left: -20px;
                bottom: 0;
                z-index: 1;
                width: 250px;
                /* Ajusta según necesites */
            }
        }

        .container.mt-4,
        .row,
        main,
        aside {
            position: relative;
            z-index: 2;
        }

        .icono {
            color: #e9ecef;
            font-size: 13px;
            font-family: Arial;
            padding: 28px 25px;

        }

        .navbar {
            margin-bottom: 20px;
        }

        .sidebar {
            background-color: #e9ecef;
            padding: 20px;
            border-radius: 10px;
            height: 100%;
        }

        .product-card {
            text-align: center;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: white;
        }

        .product-card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 10px;
        }

        .parte_titulo {
            margin-top: 20px;
            font-weight: bold;
            border-bottom: 3px solid #e2e2e2;
            padding-bottom: 5px;
        }


        @media (max-width: 768px) {
            .sidebar {
                margin-bottom: 20px;
                height: auto;
            }

            .product-card img {
                height: 120px;
            }
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <header class="bg-primary text-white text-center py-3">
        <img src="imagenes_web/logo.png" alt="logo1-img" class="img-fluid">
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
                <li class="nav-item">
                    <a href="#categoria" class="nav-link">Categorías</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">Descubre Nuestras</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a href="ofertas.php" class="dropdown-item">Ofertas</a></li>
                        <li><a href="novedades.php" class="dropdown-item">Novedades</a></li>
                        <li><a href="sucursales2.php" class="dropdown-item">Sucursales</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a href="contacto.php" class="dropdown-item">Contactos</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo $usuario_logueado ? htmlspecialchars($_SESSION['usuario']['nombre']) : 'Cuenta'; ?>
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
            </ul>
            <form class="d-flex my-2 my-lg-0">
                <input class="form-control me-2" type="search" placeholder="Buscar producto" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">Buscar</button>
            </form>
        </div>
    </nav>
    <!-- Modal -->
    <!-- Modal de Login -->
    <!-- Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content shadow">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Iniciar Sesión</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    <form action="control.php" method="POST">
                        <div class="mb-3">
                            <label for="login-email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="login-email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="login-password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="login-password" name="password" required>
                        </div>
                        <input type="hidden" name="action" value="login">
                        <button type="submit" class="btn btn-success w-100">Iniciar Sesión</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- start home -->
    <section class="home bg-image" id="home">
        <!-- start container -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="home-content home-heading">
                        <h1 class="fw-bold display-4">Bienvenidos a</h1>
                        <br><br><br><br><br>
                        <br><br><br><br><br> <br>
                        <br><br><br><br>
                        <button class="btn btn-dark">Explorar</button>
                    </div>

                    <div class="row mt-5">
                        <div class="col-lg-4 col-6">
                            <div class="counter-box">
                                <div class="d-flex align-items-center justify-content-start">
                                    <h2 class="counter_value fw-bold" data-bs-target="100">0</h2><span
                                        class="h2 fw-bold"></span><span class="h2">+</span>
                                </div>
                                <p class="counter-caption">Productos</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6">
                            <div class="counter-box">
                                <div class="d-flex align-items-center justify-content-start">
                                    <h2 class="counter_value fw-bold" data-bs-target="20">0</h2><span
                                        class="h2 fw-bold"></span><span class="h2">+</span>
                                </div>
                                <p class="counter-caption">Ventas</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6">
                            <div class="counter-box">
                                <div class="d-flex align-items-center justify-content-start">
                                    <h2 class="counter_value fw-bold" data-bs-target="10">0</h2><span
                                        class="h2 fw-bold"></span><span class="h2">+</span>
                                </div>
                                <p class="counter-caption">Pedidos</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="client-slider" id="clients-slider">
                        <div class="item">
                            <div class="card position-relative overflow-hidden m-2 m-lg-0">
                                <img src="imagenes_web/bebidas/cocacola.jpeg" alt="logo-img" class="img-fluid">
                                <div class="card-body slider-content position-relative">
                                    <p class="mb-2">Coca Cola</p>
                                    <h5 class="fw-bold">15 bs</h5>

                                    <div class="d-flex">
                                        <div class=" slider-content-image d-flex mt-3">
                                            <div class="avatar-sm">
                                                <img src="imagenes_web/especiales/chocolate.jpg" alt="" class="img-fluid">
                                            </div>

                                            <div class="avatar-sm top-child">
                                                <img src="imagenes_web/especiales/kimchi.jpg" alt="" class="img-fluid">
                                            </div>

                                            <div class="avatar-sm top-child position-relative">
                                                <img src="imagenes_web/especiales/pasta.jpg" alt="" class="img-fluid">

                                                <span class="content-image-check">
                                                    <span class="visually-visible"><i
                                                            class="mdi mdi-check f-12"></i></span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="slider-content-button">
                                            <button class="btn btn-dark pe-5">COMPRAR</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- slider item -->

                        <div class="item">
                            <div class="card position-relative overflow-hidden m-2 m-lg-0">
                                <img src="imagenes_web/bebidas/ades.jpg" alt="logo-img" class="img-fluid">
                                <div class="card-body slider-content position-relative">
                                    <p class="mb-2">Ades</p>
                                    <h5 class="fw-bold">8.20 bs</h5>

                                    <div class="d-flex">
                                        <div class=" slider-content-image d-flex mt-3">
                                            <div class="avatar-sm">
                                                <img src="imagenes_web/especiales/chocolate.jpg" alt="" class="img-fluid">
                                            </div>

                                            <div class="avatar-sm top-child">
                                                <img src="imagenes_web/especiales/kimchi.jpg" alt="" class="img-fluid">
                                            </div>

                                            <div class="avatar-sm top-child position-relative">
                                                <img src="imagenes_web/especiales/pasta.jpg" alt="" class="img-fluid">

                                                <span class="content-image-check">
                                                    <span class="visually-visible"><i
                                                            class="mdi mdi-check f-12"></i></span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="slider-content-button">
                                            <button class="btn btn-dark pe-5">COMPRAR</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- slider item -->

                        <div class="item">
                            <div class="card position-relative overflow-hidden m-2 m-lg-0">
                                <img src="imagenes_web/congelados/helado.jpg" alt="logo-img" class="img-fluid">
                                <div class="card-body slider-content position-relative">
                                    <p class="mb-2">Helado</p>
                                    <h5 class="fw-bold ">39.50 bs</h5>

                                    <div class="d-flex">
                                        <div class=" slider-content-image d-flex mt-3">
                                            <div class="avatar-sm">
                                                <img src="imagenes_web/especiales/chocolate.jpg" alt="" class="img-fluid">
                                            </div>

                                            <div class="avatar-sm top-child">
                                                <img src="imagenes_web/especiales/kimchi.jpg" alt="" class="img-fluid">
                                            </div>

                                            <div class="avatar-sm top-child position-relative">
                                                <img src="imagenes_web/especiales/pasta.jpg" alt="" class="img-fluid">

                                                <span class="content-image-check">
                                                    <span class="visually-visible"><i
                                                            class="mdi mdi-check f-12"></i></span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="slider-content-button">
                                            <button class="btn btn-dark pe-5">COMPRAR</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- slider item -->

                        <div class="item">
                            <div class="card position-relative overflow-hidden m-2 m-lg-0">
                                <img src="imagenes_web/especiales/pasta.jpg" alt="logo-img" class="img-fluid">
                                <div class="card-body slider-content position-relative">
                                    <p class="mb-2">Pasta Italiana</p>
                                    <h5 class="fw-bold">25 bs</h5>

                                    <div class="d-flex">
                                        <div class=" slider-content-image d-flex mt-3">
                                            <div class="avatar-sm">
                                                <img src="imagenes_web/especiales/chocolate.jpg" alt="" class="img-fluid">
                                            </div>

                                            <div class="avatar-sm top-child">
                                                <img src="imagenes_web/especiales/kimchi.jpg" alt="" class="img-fluid">
                                            </div>

                                            <div class="avatar-sm top-child position-relative">
                                                <img src="imagenes_web/especiales/pasta.jpg" alt="" class="img-fluid">

                                                <span class="content-image-check">
                                                    <span class="visually-visible"><i
                                                            class="mdi mdi-check f-12"></i></span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="slider-content-button">
                                            <button class="btn btn-dark pe-5">COMPRAR</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- slider item -->
                    </div>
                    <!-- End slider -->
                </div>

            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end home -->

    <div class="chica-superpuesta position-absolute top-100 bottom-0 start-0">
        <img src="imagenes_web/chica_fondo4.png" alt="Chica fondo" />
    </div>

    <div class="background-wrapper">


        <div class="container mt-4" id="categoria">
            <div class="row">

                <div class="container mt-4">
                    <div class="row">
                        <aside class="sidebar text-center">
                            <p><strong>Más productos sobre:</strong></p>
                            <div class="d-flex overflow-auto flex-nowrap gap-2 pb-2">
                                <?php

                                while ($r = mysqli_fetch_row($categorias)) {

                                ?>
                                    <a href="#" class="btn btn-primary"><?php echo $r[1]; ?></a>

                                <?php } ?>
                            </div>

                        </aside>

                        <aside class="col-lg-3 col-md-4 sidebar">
                            <h5 class="mb-3 fw-bold">Filtros</h5>

                            <!-- Exclusivo online -->
                            <div class="form-check form-switch mb-4">
                                <input class="form-check-input" type="checkbox" id="exclusivoOnline">
                                <label class="form-check-label fw-semibold" for="exclusivoOnline">Exclusivo online</label>
                            </div>

                            <!-- Precio -->
                            <div class="mb-4">
                                <h6 class="fw-bold">Precio</h6>
                                <div class="d-flex justify-content-between">
                                    <input type="text" class="form-control me-2" placeholder="Mínimo">
                                    <input type="text" class="form-control" placeholder="Máximo">
                                </div>
                                <input type="range" class="form-range mt-3" min="1999" max="15999">
                            </div>

                            <!-- Categoría -->
                            <div class="mb-4">
                                <h6 class="fw-bold">Categoría</h6>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="cat1">
                                    <label class="form-check-label" for="cat1">Lacteos</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="cat2">
                                    <label class="form-check-label" for="cat2">Panaderia</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="cat3">
                                    <label class="form-check-label" for="cat3">Abarrotes</label>
                                </div>
                            </div>

                            <!-- Tipo -->
                            <div class="mb-4">
                                <h6 class="fw-bold">Tipo</h6>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="tipo1">
                                    <label class="form-check-label" for="tipo1">Bebidas</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="tipo2">
                                    <label class="form-check-label" for="tipo2">Limpieza</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="tipo3">
                                    <label class="form-check-label" for="tipo3">Congelados</label>
                                </div>


                            </div>

                        </aside>
                        <main class="col-lg-9 col-md-8">

                            <?php
                            while ($categoria = mysqli_fetch_assoc($resultado_categorias)) {
                                $categoria_id = $categoria['id_categoria'];
                                $categoria_nombre = htmlspecialchars($categoria['nombre_categoria']);

                                $sql_productos = "SELECT id_producto, nombre, descripcion, precio, stock, imagen 
                          FROM productos WHERE id_categoria = $categoria_id LIMIT 4";

                                $resultado_productos = mysqli_query($conn, $sql_productos);

                                if (mysqli_num_rows($resultado_productos) > 0) {
                            ?>

                                    <section class="row mb-4">

                                        <h2 class="parte_titulo">
                                            <a href="productos_por_categoria.php?id=<?php echo $categoria_id; ?>" class="nav-link">
                                                <?php echo $categoria_nombre; ?>
                                            </a>
                                        </h2>

                                        <div class="row">
                                            <?php
                                            while ($r = mysqli_fetch_row($resultado_productos)) {
                                            ?>

                                                <article class="col-md-6 col-lg-3 col-6">
                                                    <div class="product-card">
                                                        <?php echo ("<img src='img_productos/$r[5]'>"); ?>
                                                        <p>
                                                            <strong><?php echo htmlspecialchars($r[1]) ?></strong><br>
                                                            <strong>Venta<?php echo htmlspecialchars($r[2]) ?></strong><br>
                                                            <?php echo "Precio: " . number_format($r[3], 2) . " Bs."; ?>

                                                        <div class="mt-2">
                                                            <?php if ($usuario_logueado): ?>
                                                                <button class="btn btn-danger rounded btn-sm text-white" onclick="agregarAlCarrito(<?php echo $r[0]; ?>)">
                                                                    <i class="mdi mdi-cart"></i> AÑADIR
                                                                </button>
                                                            <?php else: ?>
                                                                <a data-bs-toggle="modal" data-bs-target="#loginModal">
                                                                    <button class="btn btn-danger rounded btn-sm text-white">
                                                                        <i class="mdi mdi-cart"></i> AÑADIR
                                                                    </button>
                                                                </a>
                                                            <?php endif; ?>
                                                        </div>
                                                        </p>
                                                    </div>
                                                </article>

                                            <?php } ?>
                                        </div>
                                    </section>
                            <?php
                                }
                            }
                            ?>

                        </main>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

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