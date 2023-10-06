<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <script src="../js/script.js"></script>
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <title>Contactos</title>
</head>
<body>
    <style>
/* Estilos generales */
body {
    font-family: Arial, sans-serif;
    background-color: pink;
}

.container-form {
    max-width: 800px;
    margin: 0 auto;
    background-color: pink;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Estilos para la información de contacto */
.info-form {
    text-align: center;
}

.info-form h2 {
    font-size: 24px;
    margin-bottom: 10px;
}

.info-form p {
    font-size: 18px;
    color: #555;
    margin-bottom: 20px;
}

.info-form a {
    text-decoration: lawngreen;
    color: #333;
    font-size: 16px;
    display: block;
    margin-bottom: 10px;
}

.info-form i {
    margin-right: 5px;
}

/* Estilos para el formulario */
form {
    margin-top: 20px;
}

.campo {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

textarea {
    height: 150px;
    width: 100%;
}

.btn-enviar {
    background-color: #333;
    color: #fff;
    border: none;
    padding: 10px 20px;
    font-size: 18px;
    border-radius: 5px;
    cursor: pointer;
}

.btn-enviar:hover {
    background-color: #555;
}

/* Estilos para el enlace de volver */
a {
    display: block;
    margin-top: 20px;
    text-align: center;
    text-decoration: none;
    color: #333;
    font-size: 16px;
}

/* Estilos para íconos */
.fa {
    margin-right: 5px;
}
</style>
<div class="container-form">
        <div class="info-form">
            <h2>Contáctanos</h2>
            <p>Esperamos conocer sobre tu experiencia comprando en nuestra tienda. Estamos disponibles por correo y líneas telefónicas abajo disponibles</p>
            <a href="#"><i class="fa fa-phone"></i> 505-2279-1160/2269-3103</a>
            <a href="#"><i class="fa fa-envelope"></i> elgrupo@barbie.com</a>
            <a href="#"><i class="fa fa-map-marked"></i> Managua, Nicaragua</a>
        </div>
        <form action="#" autocomplete="off">
            <input type="text" name="nombre" placeholder="Tu Nombre" class="campo">
            <input type="emal" name="email" placeholder="Tu Email" class="campo">
            <textarea name="mensaje" placeholder="Tu Mensaje..."></textarea>
            <input type="submit" name="enviar" value="Enviar Mensaje" class="btn-enviar">
        </form>
        <br><br><br>
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