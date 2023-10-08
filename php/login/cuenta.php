<?php
session_start();

// Verifica si el usuario tiene una sesión activa
if (!isset($_SESSION['user'])) {
    header("Location: ../php/login/login.php");
    exit();
}

// Aquí debes obtener y mostrar la información de la cuenta del usuario desde tu base de datos
$nombre = "Nombre del Usuario"; // Reemplaza con la información real
$apellido = "Apellido del Usuario"; // Reemplaza con la información real
$usuario = $_SESSION['user']; // El usuario ya está almacenado en la sesión

// Puedes incluir la imagen de perfil si la tienes almacenada
// $imagenPerfil = "ruta/a/imagen.png"; // Reemplaza con la ruta real de la imagen

// También puedes mostrar la fecha de registro si la tienes en tu base de datos
// $fechaRegistro = "2023-01-01"; // Reemplaza con la fecha real

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Cuenta</title>
    <!-- Agrega tus estilos CSS aquí -->
</head>
<body>
    <h1>Mi Cuenta</h1>

    <!-- Muestra la información de la cuenta del usuario -->
    <p>Nombre: <?php echo $nombre; ?></p>
    <p>Apellido: <?php echo $apellido; ?></p>
    <p>Usuario: <?php echo $usuario; ?></p>
    <!-- Puedes incluir la imagen de perfil aquí -->
    <!-- <img src="<?php echo $imagenPerfil; ?>" alt="Foto de perfil"> -->
    <!-- Puedes mostrar la fecha de registro aquí -->
    <!-- <p>Fecha de Registro: <?php echo $fechaRegistro; ?></p> -->

    <p><a href="../php/login/logout.php">Cerrar Sesión</a></p>
</body>
</html>
