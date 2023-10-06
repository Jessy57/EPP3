<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <script src="../js/script.js"></script>
    <title>Formulario de Producto Cosmético</title>
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
form {
    width: 80%;
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f5f5f5;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-family: Arial, sans-serif;
}

/* Estilo para los campos de entrada de texto y textarea */
input[type="text"],
input[type="number"],
textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 3px;
    font-size: 16px;
}

/* Estilo para las etiquetas */
label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

/* Estilo para el botón */
input[type="submit"] {
    background-color: #007BFF;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    font-size: 16px;
}

/* Cambio de color al pasar el mouse sobre el botón */
input[type="submit"]:hover {
    background-color: #0056b3;
}

/* Estilo para el enlace de volver */
a {
    display: block;
    text-align: center;
    margin-top: 20px;
    color: #007BFF;
    text-decoration: none;
    font-weight: bold;
}

/* Cambio de color al pasar el mouse sobre el enlace de volver */
a:hover {
    color: #0056b3;
}
</style>
    <h1>Registrar un Producto Cosmético</h1>
    <form action="agregar_producto.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br><br>

        <label for="marca">Marca:</label>
        <input type="text" name="marca"><br><br>

        <label for="categoria">Categoría:</label>
        <input type="text" name="categoria"><br><br>

        <label for="precio">Precio:</label>
        <input type="number" step="0.01" name="precio" required><br><br>

        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion"></textarea><br><br>

        <label for="fecha_lanzamiento">Fecha de Lanzamiento:</label>
        <input type="date" name="fecha_lanzamiento"><br><br>

        <label for="disponible">Disponible:</label>
        <input type="checkbox" name="disponible" value="1"><br><br>

        <input type="submit" value="Agregar Producto">
    </form>
    <a href="index.php">Volver a la página de inicio</a>
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
</html>