<?php
session_start();
include "../config.php";

// Verificar si es administrador - usando sesión específica de admin
if (!isset($_SESSION['admin']) || $_SESSION['admin']['rol'] != 'admin') {
    header("Location: ../login.php");
    exit();
}

$success = '';
$error = '';

if ($_POST) {
    $nombre = mysqli_real_escape_string($conn, $_POST['nombre']);
    $ci = mysqli_real_escape_string($conn, $_POST['ci']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    
    // Validaciones
    if (empty($nombre) || empty($ci) || empty($email) || empty($password)) {
        $error = "Todos los campos son obligatorios";
    } elseif ($password !== $confirm_password) {
        $error = "Las contraseñas no coinciden";
    } elseif (strlen($password) < 6) {
        $error = "La contraseña debe tener al menos 6 caracteres";
    } else {
        // Verificar si el email ya existe
        $check_email = "SELECT id_usuario FROM usuario WHERE email = '$email'";
        $result = mysqli_query($conn, $check_email);
        
        if (mysqli_num_rows($result) > 0) {
            $error = "Este email ya está registrado";
        } else {
            // Verificar si la cédula ya existe
            $check_ci = "SELECT id_usuario FROM usuario WHERE ci = '$ci'";
            $result = mysqli_query($conn, $check_ci);
            
            if (mysqli_num_rows($result) > 0) {
                $error = "Esta cédula ya está registrada";
            } else {
                // Encriptar contraseña con MD5
                $password_md5 = md5($password);
                
                // Insertar nuevo administrador
                $sql = "INSERT INTO usuario (nombre, ci, email, contrasena, rol) 
                        VALUES ('$nombre', '$ci', '$email', '$password_md5', 'admin')";
                
                if (mysqli_query($conn, $sql)) {
                    $success = "Administrador registrado exitosamente";
                    // Limpiar el formulario
                    $_POST = array();
                } else {
                    $error = "Error al registrar el administrador: " . mysqli_error($conn);
                }
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Administradores - OnlyMarket</title>
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
                <a href="index.php" class="btn btn-outline-light btn-sm me-2">
                    <i class="uil uil-estate"></i> Dashboard
                </a>
                <a href="../logout.php" class="btn btn-outline-light btn-sm">
                    <i class="uil uil-sign-out-alt"></i> Cerrar Sesión
                </a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-warning text-dark">
                        <h4 class="mb-0">
                            <i class="uil uil-user-plus"></i> Registrar Nuevo Administrador
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php if ($error): ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <?php echo $error; ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        <?php endif; ?>
                        
                        <?php if ($success): ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <?php echo $success; ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        <?php endif; ?>

                        <form method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="nombre" class="form-label">Nombre Completo *</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" 
                                               value="<?php echo isset($_POST['nombre']) ? htmlspecialchars($_POST['nombre']) : ''; ?>" 
                                               required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="ci" class="form-label">Cédula de Identidad *</label>
                                        <input type="text" class="form-control" id="ci" name="ci" 
                                               value="<?php echo isset($_POST['ci']) ? htmlspecialchars($_POST['ci']) : ''; ?>" 
                                               required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo Electrónico *</label>
                                <input type="email" class="form-control" id="email" name="email" 
                                       value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>" 
                                       required>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Contraseña *</label>
                                        <input type="password" class="form-control" id="password" name="password" 
                                               minlength="6" required>
                                        <div class="form-text">Mínimo 6 caracteres</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="confirm_password" class="form-label">Confirmar Contraseña *</label>
                                        <input type="password" class="form-control" id="confirm_password" 
                                               name="confirm_password" required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-warning btn-lg">
                                    <i class="uil uil-user-plus"></i> Registrar Administrador
                                </button>
                                <a href="index.php" class="btn btn-secondary">
                                    <i class="uil uil-arrow-left"></i> Volver al Dashboard
                                </a>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Información adicional -->
                <div class="card mt-4">
                    <div class="card-header bg-info text-white">
                        <h6 class="mb-0"><i class="uil uil-info-circle"></i> Información Importante</h6>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li><i class="uil uil-check-circle text-success"></i> Los administradores tendrán acceso completo al panel</li>
                            <li><i class="uil uil-check-circle text-success"></i> Podrán registrar otros administradores</li>
                            <li><i class="uil uil-check-circle text-success"></i> Tendrán permisos para gestionar todo el sistema</li>
                            <li><i class="uil uil-shield-exclamation text-warning"></i> Asegúrate de registrar solo personas de confianza</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/bootstrap.bundle.min.js"></script>
    <script>
        // Validación de contraseñas en tiempo real
        document.getElementById('confirm_password').addEventListener('input', function() {
            const password = document.getElementById('password').value;
            const confirmPassword = this.value;
            
            if (password !== confirmPassword) {
                this.style.borderColor = 'red';
            } else {
                this.style.borderColor = '#ced4da';
            }
        });
    </script>
</body>
</html>