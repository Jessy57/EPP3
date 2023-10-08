<!--Mencion PHP--->
<?php
include("template/nav.php");
include("template/slider.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Lylla</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<!-- Contenedor principal -->
<div class="container mt-5">
    <!-- Descripción de la empresa -->
    <div class="jumbotron">
        <h1>Lylla - Maquillaje Excepcional</h1>
        <p>Somos una empresa apasionada por el maquillaje y la belleza. Nuestros productos y servicios están diseñados para realzar tu belleza natural. ¡Estamos aquí para ayudarte a lucir y sentirte lo mejor posible!</p>
    </div>

    <!-- Botón de contacto con JavaScript -->
   <center> <button class="btn btn-primary" id="contactButton">Contacto</button></center>

    <!-- Formulario de contacto (inicialmente oculto) -->
    <div id="contactForm" class="mt-4">
        <h2>Formulario de Contacto</h2>
        <form>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" placeholder="Tu nombre">
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" placeholder="tu@email.com">
            </div>
            <div class="form-group">
                <label for="mensaje">Mensaje</label>
                <textarea class="form-control" id="mensaje" rows="5" placeholder="Escribe tu mensaje"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

    <!-- Espacio entre la sección de ubicación y contacto -->
    <div style="height: 30px;"></div>

    <!-- Sección de ubicación y contacto -->
    <div id="locationSection">
        <h2>Ubicación y Contacto</h2>
        <div id="locationInfo">
            <p><strong>Dirección:</strong> Estamos ubicados en Centro Comercial Managua Mod.A#40 frente al Food Court.</p>
            <p><strong>Teléfono:</strong> +123 456 789</p>
            <p><strong>Correo Electrónico:</strong> info@miempresa.com</p>
        </div>

        <!-- Mapa de Google Maps -->
        <div id="googleMapContainer" style="height: 400px; border: 1px solid #ddd; border-radius: 10px; overflow: hidden;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.9284895651977!2d-86.25030132995713!3d12.117045357461068!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f73fe186a396167%3A0x641716e7c1ebb425!2sCentro%20Comercial%20Managua!5e0!3m2!1ses-419!2sni!4v1696714105117!5m2!1ses-419!2sni" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <!-- Espacio en el final de la página -->
    <div style="height: 50px;"></div>
</div>

<!-- Scripts de Bootstrap, JavaScript y Google Maps -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    // Función para mostrar/ocultar el formulario de contacto al hacer clic en el botón
    document.getElementById("contactButton").addEventListener("click", function () {
        var contactForm = document.getElementById("contactForm");
        if (contactForm.style.display === "none" || contactForm.style.display === "") {
            contactForm.style.display = "block";
        } else {
            contactForm.style.display = "none";
        }
    });
</script>
</body>
</html>


<!--Mencion PHP--->
<?php
include("template/footer.php");
?>