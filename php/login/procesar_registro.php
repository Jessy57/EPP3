<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $user = $_POST['user'];
    $password = $_POST['password'];
    $direccion = $_POST['direccion'];
    $numero_telefonico = $_POST['numero_telefonico'];
    $estado_civil = $_POST['estado_civil'];
    // Conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $dbpassword = "";
    $dbname = "lylla";
    $conn = new mysqli($servername, $username, $dbpassword, $dbname);

    if ($conn->connect_error) {
        die("Error de conexión a la base de datos: " . $conn->connect_error);
    }
    // Hashea la contraseña
    $password_hashed = password_hash($password, PASSWORD_DEFAULT);
    // Consulta SQL insertar nuevo usuario
    $sql = "INSERT INTO usuarios (nombre, apellido, user, password, direccion, numero_telefonico, estado_civil)
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssss", $nombre, $apellido, $user, $password_hashed, $direccion, $numero_telefonico, $estado_civil);
    if ($stmt->execute()) {
        echo "Usuario registrado correctamente. <a href='login.php'>Iniciar Sesión</a>";
    } else {
        echo "Error al registrar el usuario: " . $stmt->error;
    }
    $stmt->close();
    $conn->close();
}
