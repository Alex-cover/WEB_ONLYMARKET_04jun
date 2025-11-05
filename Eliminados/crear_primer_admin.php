<?php
include "config.php";

// Datos del primer administrador
$nombre = "AdminAlex";
$ci = "0000000";
$email = "admin@onlymarket.com";
$password = "admin123";
$password_md5 = md5($password);

// Verificar si ya existe
$check_sql = "SELECT id_usuario FROM usuarios WHERE email = '$email'";
$result = mysqli_query($conn, $check_sql);

if (mysqli_num_rows($result) > 0) {
    // Actualizar a administrador
    $update_sql = "UPDATE usuarios SET rol = 'admin' WHERE email = '$email'";
    if (mysqli_query($conn, $update_sql)) {
        echo "Usuario actualizado a administrador exitosamente<br>";
        echo "Email: $email<br>";
        echo "Contraseña: $password<br>";
        echo "<a href='Administrador/login.php'>Ir al Login de Administración</a>";
    }
} else {
    // Crear nuevo administrador
    $insert_sql = "INSERT INTO usuarios (nombre, ci, email, contrasena, rol) 
                   VALUES ('$nombre', '$ci', '$email', '$password_md5', 'admin')";
    
    if (mysqli_query($conn, $insert_sql)) {
        echo "Administrador creado exitosamente<br>";
        echo "Email: $email<br>";
        echo "Contraseña: $password<br>";
        echo "<a href='Administrador/login.php'>Ir al Login de Administración</a>";
    } else {
        echo "Error al crear administrador: " . mysqli_error($conn);
    }
}
?>