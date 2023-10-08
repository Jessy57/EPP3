<?php
session_start();

// Función para iniciar sesión 
function iniciarSesion($usuario) {
    $_SESSION['user'] = $usuario;

    // Almacena el usuario en una cookie válida por, por ejemplo
    setcookie("user_cookie", $usuario, time() + (7 * 24 * 60 * 60), "/");
    
    // Conexión a la base de datos 
    $servername = "localhost";
    $username = "root";
    $dbpassword = "";
    $dbname = "lylla";

    $conn = new mysqli($servername, $username, $dbpassword, $dbname);

    if ($conn->connect_error) {
        die("Error de conexión a la base de datos: " . $conn->connect_error);
    }

    // Consulta SQL 
    $query = "SELECT nombre, apellido FROM campos_previos WHERE user = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        $nombre = ""; 
        $apellido = ""; 
        $query = "INSERT INTO campos_previos (user, nombre, apellido) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sss", $usuario, $nombre, $apellido);
        $stmt->execute();
    }

    $stmt->close();
    $conn->close();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['user'];
    $password = $_POST['password'];

    // Conexión a la base de datos 
    $servername = "localhost";
    $username = "root";
    $dbpassword = "";
    $dbname = "lylla";

    $conn = new mysqli($servername, $username, $dbpassword, $dbname);

    if ($conn->connect_error) {
        die("Error de conexión a la base de datos: " . $conn->connect_error);
    }

    // Consulta SQL 
    $query = "SELECT * FROM usuarios WHERE user = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        // Verifica la contraseña
        if (password_verify($password, $row['password'])) {
            // Inicia sesión y almacena campos previos
            iniciarSesion($user);
            header("Location: ../index.php");
            exit();
        } else {
            $error_message = "Contraseña incorrecta";
        }
    } else {
        $error_message = "Usuario no encontrado";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h2>Iniciar Sesión</h2>
                <?php if (isset($error_message)) { ?>
                    <div class="alert alert-danger"><?php echo $error_message; ?></div>
                <?php } ?>
                <form method="post">
                    <div class="form-group">
                        <label for="user">Usuario:</label>
                        <input type="text" class="form-control" name="user" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña:</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                </form>
                <p>No tienes una cuenta? <a href="registro.php">Regístrate aquí</a></p>
            </div>
        </div>
    </div>
</body>

</html>
