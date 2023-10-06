<?php
// Conexión a la base de datos (asegúrate de configurar los datos de conexión)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "catalogo_cosmeticos";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST["nombre"];
$marca = $_POST["marca"];
$categoria = $_POST["categoria"];
$precio = $_POST["precio"];
$descripcion = $_POST["descripcion"];
$fecha_lanzamiento = $_POST["fecha_lanzamiento"];
$disponible = isset($_POST["disponible"]) ? 1 : 0;

// Insertar datos en la base de datos
$sql = "INSERT INTO productos_cosmeticos (nombre, marca, categoria, precio, descripcion, fecha_lanzamiento, disponible)
        VALUES ('$nombre', '$marca', '$categoria', $precio, '$descripcion', '$fecha_lanzamiento', $disponible)";

if ($conn->query($sql) === TRUE) {
    echo "Producto agregado con éxito.";
} else {
    echo "Error al agregar el producto: " . $conn->error;
}
if (isset($_POST["agregar_al_carrito"])) {
    $productoId = $_POST["producto_id"];
    // Agregar el producto al carrito (usando el ID como clave y la cantidad como valor)
    if (!isset($_SESSION["carrito"][$productoId])) {
        $_SESSION["carrito"][$productoId] = 1;

        // Guardar el producto en la base de datos
        $nombreProducto = $productos[$productoId]['nombre'];
        $precioUnitario = $productos[$productoId]['precio'];

        // Consulta SQL para insertar el producto en la tabla de la base de datos
        $sql = "INSERT INTO carrito_compras (producto_id, nombre_producto, precio_unitario, cantidad) 
                VALUES ('$productoId', '$nombreProducto', '$precioUnitario', '1')";

        // Ejecutar la consulta
        if (mysqli_query($conn, $sql)) {
            echo "Producto agregado al carrito y guardado en la base de datos.";
        } else {
            echo "Error al guardar el producto en la base de datos: " . mysqli_error($conn);
        }
    } else {
        $_SESSION["carrito"][$productoId]++;
    }
}

// Cerrar la conexión
$conn->close();
?>
<a href="index.php">Volver a la página de inicio</a>