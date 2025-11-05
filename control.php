<?php
session_start();
include "config.php";

// Verificar qué acción se está solicitando
$action = $_POST['action'] ?? '';

if ($action === 'crear_cuenta') {
    crearCuenta();
} elseif ($action === 'login') {
    login();
} else {
    header("Location: index.php");
    exit();
}

function crearCuenta() {
    global $conn;
    
    // Recoger datos del formulario
    $nombre = mysqli_real_escape_string($conn, $_POST['nombre_completo']);
    $ci = mysqli_real_escape_string($conn, $_POST['ci']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];
    
    // Validaciones básicas
    if (empty($nombre) || empty($ci) || empty($email) || empty($password)) {
        echo "<script>
            alert('Todos los campos son obligatorios');
            window.history.back();
        </script>";
        exit();
    }
    
    // Verificar si el email ya existe
    $check_email = "SELECT id_usuario FROM usuarios WHERE email = '$email'";
    $result = mysqli_query($conn, $check_email);
    
    if (mysqli_num_rows($result) > 0) {
        echo "<script>
            alert('Este email ya está registrado');
            window.history.back();
        </script>";
        exit();
    }
    
    // Verificar si la cédula ya existe
    $check_ci = "SELECT id_usuario FROM usuarios WHERE ci = '$ci'";
    $result = mysqli_query($conn, $check_ci);
    
    if (mysqli_num_rows($result) > 0) {
        echo "<script>
            alert('Esta cédula ya está registrada');
            window.history.back();
        </script>";
        exit();
    }
    
    // Encriptar contraseña con MD5
    $password_md5 = md5($password);
    
    // Insertar nuevo usuario
    $sql = "INSERT INTO usuarios (nombre, ci, email, contrasena) 
            VALUES ('$nombre', '$ci', '$email', '$password_md5')";
    
    if (mysqli_query($conn, $sql)) {
        // Obtener el ID del usuario recién insertado
        $user_id = mysqli_insert_id($conn);
        
        // Buscar los datos completos del usuario
        $user_query = "SELECT * FROM usuarios WHERE id_usuario = $user_id";
        $user_result = mysqli_query($conn, $user_query);
        $usuario = mysqli_fetch_assoc($user_result);
        
        // Iniciar sesión automáticamente
        $_SESSION['usuario'] = $usuario;
        
        echo "<script>
            alert('Cuenta creada exitosamente');
            window.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
            alert('Error al crear la cuenta: " . mysqli_error($conn) . "');
            window.history.back();
        </script>";
    }
}

function login() {
    global $conn;
    
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];
    
    // Validaciones
    if (empty($email) || empty($password)) {
        echo "<script>
            alert('Email y contraseña son obligatorios');
            window.history.back();
        </script>";
        exit();
    }
    
    // Encriptar la contraseña ingresada con MD5 para comparar
    $password_md5 = md5($password);
    
    // Buscar usuario por email
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    
    if ($result && mysqli_num_rows($result) > 0) {
        $usuario = mysqli_fetch_assoc($result);
        
        // Verificar contraseña - comparar MD5
        if ($password_md5 === $usuario['contrasena']) {
            // Contraseña correcta - iniciar sesión
            $_SESSION['usuario'] = $usuario;
            
            echo "<script>
                alert('Bienvenido, " . $usuario['nombre'] . "');
                window.location.href = 'index.php';
            </script>";
        } else {
            echo "<script>
                alert('Contraseña incorrecta');
                window.history.back();
            </script>";
        }
    } else {
        echo "<script>
            alert('Usuario no encontrado');
            window.history.back();
        </script>";
    }
}
?>