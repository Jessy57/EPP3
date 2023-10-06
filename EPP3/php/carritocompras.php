<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <script src="../js/script.js"></script>
    <title>Carrito de Compras</title>
</head>
<body>
<style>
    body{
    background-color: pink;
}
/* Estilo para el encabezado */
h1 {
    text-align: center;
    font-size: 24px;
    margin-bottom: 20px;
}

/* Estilo para la tabla */
table {
    width: 80%;
    margin: 0 auto;
    border-collapse: collapse;
}

/* Estilo para las filas de la tabla */
tr {
    background-color: #f5f5f5;
}

/* Estilo para las celdas de la tabla */
th, td {
    padding: 10px;
    text-align: center;
}

/* Estilo para el encabezado de la tabla */
th {
    background-color: #007BFF;
    color: #fff;
}

/* Estilo para las celdas de datos */
td {
    border-bottom: 1px solid #ddd;
}

/* Estilo para el botón "Vaciar Carrito" */
input[type="submit"] {
    background-color: #007BFF;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    font-size: 16px;
    margin-top: 20px;
}

/* Cambio de color al pasar el mouse sobre el botón */
input[type="submit"]:hover {
    background-color: #0056b3;
}

/* Estilo para los enlaces de volver */
a {
    display: block;
    text-align: center;
    margin-top: 20px;
    color: #007BFF;
    text-decoration: none;
    font-weight: bold;
}

/* Cambio de color al pasar el mouse sobre los enlaces de volver */
a:hover {
    color: #0056b3;
}
</style>
<?php
session_start();
$productos = array(
    1 => array(
        'nombre' => 'Miss Dior',
        'precio' => 19.99,
    ),
    2 => array(
        'nombre' => 'Soul',
        'precio' => 24.99,
    ),
    3 => array(
        'nombre' => 'Base de Maquillaje',
        'precio' => 15.99,
    ),
    4 => array(
        'nombre' => 'Crema hidratante',
        'precio' => 9.99,
    ),
    5 => array(
        'nombre' => 'Labial de Color',
        'precio' => 8.49,
    ),
    6 => array(
        'nombre' => 'Loción Facial',
        'precio' => 12.95,
    ),
    7 => array(
        'nombre' => 'Sombras de ojos',
        'precio' => 11.99,
    ),
    8 => array(
        'nombre' => 'Gel de Ducha',
        'precio' => 5.49,
    ),
    9 => array(
        'nombre' => 'Esmalte de uñas',
        'precio' => 6.99,
    ),
    10 => array(
        'nombre' => 'Máscara de Pestañas',
        'precio' => 7.49,
    ),
    11 => array(
        'nombre' => 'Crema Antiarrugas',
        'precio' => 19.99,
    ),
    12 => array(
        'nombre' => 'Perfume Floral',
        'precio' => 69.99,
    ),
    // Agrega más productos según sea necesario
);
    
if (isset($_POST["agregar_al_carrito"])) {
    $productoId = $_POST["producto_id"];
    // Agregar el producto al carrito (usando el ID como clave y la cantidad como valor)
    if (!isset($_SESSION["carrito"][$productoId])) {
        $_SESSION["carrito"][$productoId] = 1;
    } else {
        $_SESSION["carrito"][$productoId]++;
    }
}

// Lógica para eliminar productos específicos del carrito
if (isset($_GET["eliminar"])) {
    $productoIdEliminar = $_GET["eliminar"];
    if (isset($_SESSION["carrito"][$productoIdEliminar])) {
        unset($_SESSION["carrito"][$productoIdEliminar]);
    }
}
if (isset($_POST["vaciar_carrito"])) {
    unset($_SESSION["carrito"]);
}
?>

<!-- Mostrar el contenido del carrito -->
<h1>Carrito de Compras</h1>
<table>
    <tr>
        <th>Producto</th>
        <th>Cantidad</th>
        <th>Precio Unitario</th>
        <th>Costo Total</th>
        <th>Acciones</th>
    </tr>
    <form method="post" action="guardar_carrito.php">
    <input type="submit" name="guardar_carrito" value="Guardar Carrito">
    </form>

    <?php
    $totalCarrito = 0; // Inicializar el total del carrito

    if (!empty($_SESSION["carrito"])) {
        foreach ($_SESSION["carrito"] as $productoId => $cantidad) {
            $nombreProducto = $productos[$productoId]['nombre'];
            $precioUnitario = $productos[$productoId]['precio'];
            $costoTotal = $precioUnitario * $cantidad;
            $totalCarrito += $costoTotal;

            echo "<tr>";
            echo "<td>$nombreProducto</td>";
            echo "<td>$cantidad</td>";
            echo "<td>$precioUnitario</td>";
            echo "<td>$costoTotal</td>";
            echo "<td><a href='carritocompras.php?eliminar=$productoId'>Eliminar</a></td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>El carrito está vacío.</td></tr>";
    }
    ?>
</table>

<p>Total del Carrito: $<?php echo number_format($totalCarrito, 2); ?></p>

<form method="post">
   <input type="submit" name="vaciar_carrito" value="Vaciar Carrito">
</form>

<a href="catalogo.php">Volver al catálogo</a><br>
       
    <!--MENCION DEL JAVASCRIPT -->
    <script src="../js/script.js"></script>
    <a href="index.php">Volver a la página de inicio</a>
     <!---MENCION PHP PARA NAV Y FOOTER--->
     <?php
    $content = ob_get_clean(); // Obtener y limpiar el contenido del búfer
    include "../php/template.php"; // Incluir la plantilla
    ?>
</body>

</html>
