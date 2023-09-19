<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/styles.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <!--NAVEGADOR-->
  <nav class="navbar">
    <div class="logo-container">
      <a href="../php/index.php"><img src="../img/logo.png" alt="Logo"></a>
    </div>
    <a href="../php/beautytools.php">
      <h1>Beauty Tools</h1>
    </a>
    <a href="../php/makeup.php">
      <h1>Makeup</h1>
    </a>
    <a href="../php//promociones.php">
      <h1>Promociones</h1>
    </a>
    <a href="../php/contactos.php">
      <h1>Contactos</h1>
    </a>
    <a href="../php/colecciones.php">
      <h1>Colecciones</h1>
    </a>

    <!-- BARRA DE BUSQUEDA-->
    <form class="search-form" action="/buscar" method="get">
      <img src="../img/lupa.png" alt="Buscar">
      <input type="text" name="q" placeholder="Buscar...">
      <button type="submit" class="search-button">

      </button>
    </form>

    <!--CARRITO DE COMPRAS-->
    <a href="../php/carritocompras.php" class="cart-link">
      <img src="../img/carrito.png" alt="Carrito">
    </a>
  </nav>

  <!--ANUNCIO DEBAJO DEL NAV-->
  <div class="announcement-bar">
    <p>🛍 Regalías por compras mayores a $25. *Hasta agotar existencias* 🛍</p>
  </div>

  <!-- Contenido de la página se incluirá aquí -->
  <?php echo $content; ?>
  <!--FOOTER--><footer class="footer">

   
  
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


  <!--MENCION DEL JAVASCRIPT -->
  <script src="../js/script.js"></script>
</body>

</html>

