<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Lylla</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<!-- Barra de Navegación -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="../php/index.php">Lylla</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="../php/index.php">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../php/productos.php">Productos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../php/contactos.php">Contacto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><img src="../img/nav/carrito.png" alt="Carrito de Compras" width="30" height="30"></a>
            </li>
            <?php
            // Iniciar la sesión
            session_start();

            if (isset($_SESSION['user'])) {
                // La sesión está iniciada, muestra el botón "Mi Cuenta"
                echo '<li class="nav-item"><a class="nav-link" id="accountLink" href="javascript:void(0)">Mi Cuenta</a></li>';
            } else {
                // La sesión no está iniciada, muestra el enlace de inicio de sesión
                echo '<li class="nav-item"><a class="nav-link" href="../php/login/login.php"><img src="../img/nav/login.png" alt="Iniciar Sesión" width="30" height="30"></a></li>';
            }
            ?>
        </ul>
    </div>
</nav>

<!-- Modal para mostrar la información de la cuenta -->
<div class="modal" id="accountModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Mi Cuenta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Aquí muestra la información de la cuenta del usuario -->
                <?php
                if (isset($_SESSION['user'])) {
                    // Obtén y muestra la información de la cuenta del usuario desde tu base de datos
                    $servername = "localhost";
                    $username = "root";
                    $password = ""; // Contraseña de tu base de datos
                    $dbname = "lylla";

                    // Conexión a la base de datos
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    if ($conn->connect_error) {
                        die("Error de conexión a la base de datos: " . $conn->connect_error);
                    }

                    // Consulta SQL para obtener la información del usuario
                    $user = $_SESSION['user'];
                    $query = "SELECT nombre, apellido FROM usuarios WHERE user = ?";
                    $stmt = $conn->prepare($query);
                    $stmt->bind_param("s", $user);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    if ($result->num_rows === 1) {
                        $row = $result->fetch_assoc();
                        $nombre = $row["nombre"];
                        $apellido = $row["apellido"];

                        echo '<p>Usuario: ' . $user . '</p>';
                        echo '<p>Nombre: ' . $nombre . '</p>';
                        echo '<p>Apellido: ' . $apellido . '</p>';
                    }

                    $stmt->close();
                    $conn->close();
                }
                ?>
            </div>
            <div class="modal-footer">
                <?php
                // Muestra el botón de Cerrar Sesión solo si la sesión está iniciada
                if (isset($_SESSION['user'])) {
                    echo '<a href="../php/login/logout.php" class="btn btn-danger">Cerrar Sesión</a>';
                }
                ?>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
// Abre la ventana emergente al hacer clic en "Mi Cuenta"
document.getElementById('accountLink').addEventListener('click', function() {
    $('#accountModal').modal('show');
});
</script>
</body>
</html>
