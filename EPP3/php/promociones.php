<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <script src="../js/script.js"></script>
    <title>Home</title>
</head>

<body>
  <style>
      /* Estilo para cada producto */
.producto {
    width: 300px;
    margin: 0 auto 20px;
    padding: 15px;
    background-color: #f5f5f5;
    border: 1px solid #ddd;
    border-radius: 5px;
    text-align: center;
    font-family: Arial, sans-serif;
}

/* Estilo para la imagen del producto */
.producto img {
    width: 200px;
    height: 200px;
    border-radius: 5px;
    margin-bottom: 10px;
}
.column {
    display: inline-block;
    width: 30%; /* Ajusta el ancho según tus preferencias */
    margin-right: 2%; /* Espacio entre columnas */
    vertical-align: top; /* Alinea los elementos en la parte superior */
    box-sizing: border-box; /* Asegura que el espacio de relleno y el borde se incluyan en el ancho */
}

/* Para la última columna, elimina el margen derecho */
.column:last-child {
    margin-right: 0;
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
.product btn  {
    background-color: #333;
    color: #fff;
    border: none;
    padding: 10px 20px;
    font-size: 18px;
    border-radius: 5px;
    cursor: pointer;
}
  </style>
      <!--SECCION DE PRODUCTOS EN DESCUENTOS-->
     <section class="discount-products">
            <h2>Productos en Descuento</h2>
            <div class="product-images-discount">
            <div class="column">
                <div class="product">
                    <img src="../img/perfumes/locion1.jpg" width="200" height="200" alt="Producto 1">
                    <a href="../php/catalogo.php" class="button">Ir al catálogo</a>
                </div>
            </div>
            <div class="column">
                <div class="product">
                    <img src="../img/perfumes/locion2.jpg" width="200" height="200" alt="Producto 2">
                    <a href="../php/catalogo.php" class="button">Ir al catálogo</a>
                </div>
            </div>
            <div class="column">
                <div class="product">
                    <img src="../img/perfumes/locion3.jpg" width="200" height="200" alt="Producto 3">
                    <a href="../php/catalogo.php" class="button">Ir al catálogo</a>
                </div>
            </div>
            </div>
        </section>

    <script src="../js/script.js"></script>
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