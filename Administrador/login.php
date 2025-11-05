
<?php
session_start();

// Si ya está logueado como admin, redirigir al dashboard
if (isset($_SESSION['admin'])) {
    header("Location: index.php");
    exit();
}

$error = '';

if ($_POST && isset($_POST['email']) && isset($_POST['password'])) {
    include "../config.php";
    
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];
    
    if (empty($email) || empty($password)) {
        $error = "Email y contraseña son obligatorios";
    } else {
        // Buscar usuario por email
        $sql = "SELECT * FROM usuarios WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        
        if ($result && mysqli_num_rows($result) > 0) {
            $usuario = mysqli_fetch_assoc($result);
            
            // Verificar contraseña con MD5
            $password_md5 = md5($password);
            
            if ($password_md5 === $usuario['contrasena']) {
                // Verificar si es administrador
                if ($usuario['rol'] == 'admin') {
                    // Iniciar sesión como admin
                    $_SESSION['admin'] = $usuario;
                    header("Location: index.php");
                    exit();
                } else {
                    $error = "No tienes permisos de administrador";
                }
            } else {
                $error = "Contraseña incorrecta";
            }
        } else {
            $error = "Usuario no encontrado";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Administrador - OnlyMarket</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    <div class="login-container">
        <div class="card">
            <div class="card-body p-5">
                <div class="text-center mb-4">
                    <img src="../imagenes_web/logo_naranja.png" alt="OnlyMarket" class="logo">
                    <h3 class="mt-3">Panel de Administración</h3>
                    <p class="text-muted">Acceso exclusivo para administradores</p>
                </div>
                <form method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control form-control-lg" id="email" name="email" required>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control form-control-lg" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 btn-lg">Acceder al Panel</button>
                </form>
                
                <div class="text-center mt-4">
                    <a href="../index.php" class="text-decoration-none text-muted">
                        ← Volver al sitio web
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>