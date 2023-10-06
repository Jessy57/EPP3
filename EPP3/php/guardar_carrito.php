<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <script src="../js/script.js"></script>
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <title>Carrito</title>
</head>

<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "catalogo_cosmeticos";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}
// Consulta SQL para seleccionar todos los registros
$sql = "SELECT * FROM carrito_compras";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<h1>Contenido del Carrito de Compras</h1>";
    echo "<table>";
    echo "<tr><th>ID</th><th>Producto ID</th><th>Nombre Producto</th><th>Precio Unitario</th><th>Cantidad</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["producto_id"] . "</td>";
        echo "<td>" . $row["nombre_producto"] . "</td>";
        echo "<td>" . $row["precio_unitario"] . "</td>";
        echo "<td>" . $row["cantidad"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No hay productos en el carrito.";
}
if (isset($_POST["guardar_carrito"])) {
    if (!empty($_SESSION["carrito"])) {
        foreach ($_SESSION["carrito"] as $productoId => $cantidad) {
            $nombreProducto = $productos[$productoId]['nombre'];
            $precioUnitario = $productos[$productoId]['precio'];

            // Consulta SQL para insertar el producto en la tabla de la base de datos
            $sql = "INSERT INTO carrito_compras (producto_id, nombre_producto, precio_unitario, cantidad) 
                    VALUES ('$productoId', '$nombreProducto', '$precioUnitario', '$cantidad')";


            // Ejecutar la consulta
            if (mysqli_query($conn, $sql)) {
                // Éxito: Producto guardado en la base de datos
            } else {
                echo "Error al guardar el producto en la base de datos: " . mysqli_error($conn);
            }
        }
        echo "Carrito guardado en la base de datos con éxito.";
}
// Cerrar la conexión a la base de datos
mysqli_close($conn);
}
?>
<br>
</body>
<!--FOOTER-->
<footer class="footer">
  <div class="footer-info">
  <img src="../img/logo.png" alt="Logo del Footer">
    <p>Telefonos: 2279-1160 / 2269-3103</p>
    <p>Dirección: Plaza San Mateo, Altamira: Altamira D Este, Plaza San Mateo, Modulo 1A, Costado Sur de las Oficinas de Enacal, America, Managua, Nicaragua</p>
  </div>
  <div class="footer-contacts">
    <div class="footer-contacts-title">
      <p>Contáctanos</p>
    
    <div class="social-icons">
      <a href="#" class="social-icon"><img src="../img/redes/instagram.png" alt="Instagram"></a>
      <a href="#" class="social-icon"><img src="../img/redes/facebook.png" alt="Facebook"></a>
      <a href="mailto:correo@example.com" class="social-icon"><img src="../img/redes/email.webp" alt="Email"></a>
    </div></div>
  </div>
  <div class="footer-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.8796480761107!2d-86.2607018262828!3d12.120386288122166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f71550793536efb%3A0xb3e069c0e7ef1078!2sPlaza%20San%20Mateo!5e0!3m2!1ses!2sni!4v1693160665452!5m2!1ses!2sni" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</footer>
<a href="index.php">Volver a la página de inicio</a>
</html>