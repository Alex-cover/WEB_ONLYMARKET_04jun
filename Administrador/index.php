<?php
session_start();
include "../config.php";

// Verificar si NO es administrador, entonces redirigir al login
if (!isset($_SESSION['admin']) || $_SESSION['admin']['rol'] != 'admin') {
    header("Location: login.php");
    exit();
}

// Si llegamos aquí, es administrador válido
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración - OnlyMarket</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="../imagenes_web/logo_naranja.png" alt="Logo" height="30" class="me-2">
                Panel de Administración
            </a>
            <div class="d-flex">
                <span class="navbar-text me-3">
                    <i class="uil uil-user-circle"></i> <?php echo $_SESSION['admin']['nombre']; ?>
                </span>
                <a href="logout.php" class="btn btn-outline-light btn-sm">
                    <i class="uil uil-sign-out-alt"></i> Cerrar Sesión
                </a>
            </div>
        </div>
    </nav>

    <div class="container-fluid mt-4">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3">
                <div class="card sidebar">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Menú de Administración</h5>
                    </div>
                    <div class="list-group list-group-flush">
                        <a href="registrar_administradores.php" class="list-group-item list-group-item-action active">
                            <i class="uil uil-users-alt"></i> Registrar Administradores
                        </a>

                        <a href="registrar_productos.php" class="list-group-item list-group-item-action active">
                            <i class="uil uil-users-alt"></i> Registrar Productos
                        </a>

                        <a href="../index.php" class="list-group-item list-group-item-action">
                            <i class="uil uil-store"></i> Ir al Sitio Web
                        </a>
                    </div>
                </div>
            </div>

            <!-- Contenido Principal -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Dashboard de Administración</h4>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-success">
                            <h5>¡Bienvenido al Panel de Administración!</h5>
                            <p class="mb-0">Has iniciado sesión correctamente como administrador.</p>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="card text-white bg-warning">
                                    <div class="card-body text-center">
                                        <i class="uil uil-users-alt display-4"></i>
                                        <h5 class="card-title mt-2">Registrar Administradores</h5>
                                        <p class="card-text">Agregar nuevos usuarios administradores al sistema</p>
                                        <a href="registrar_administradores.php" class="btn btn-light">Ir a Registrar</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="card text-white bg-success">
                                    <div class="card-body text-center">
                                        <i class="uil uil-store display-4"></i>
                                        <h5 class="card-title mt-2">Ver Sitio Web</h5>
                                        <p class="card-text">Ir al sitio principal de OnlyMarket</p>
                                        <a href="../index.php" class="btn btn-light">Visitar Sitio</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>