<!---COMIENZO HTML--->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <script src="../js/script.js"></script>
    <title>Home</title>
</head>

<body>
    <header>
        <!--SLIDER-->
        <div class="slider">
            <button class="prev-slide">&larr;</button>
            <img src="../img/slide.jpg" alt="Slide 1" class="slider-image active">
            <img src="../img/slide2.jpeg" alt="Slide 2" class="slider-image">
            <img src="../img/slider3.jpg" alt="Slide 3" class="slider-image">
            <button class="next-slide">&rarr;</button>
        </div>
    </header>

    <main>
        <section><!--SECCION DE BOTONES-->
            <div class="buttons">
                <a href="../php/formulario.php" class="button">Solicitar Producto</a>
                <a href="../php/promociones.php" class="button">Promociones</a>
                <a href="../php/catalogo.php" class="button">Catalogo</a>
            </div>
        </section>
        <br>

        <!--SECCION DE NUEVOS PRODUCTOS-->
        <section class="new-products">
            <h2>Nuevos Productos</h2>
            <div class="product-images">
                <img src="../img/perfumes/locion1.jpg" alt="Producto 1">
                <img src="../img/perfumes/locion2.jpg" alt="Producto 2">
                <img src="../img/perfumes/locion3.jpg" alt="Producto 3">
            </div>

            <!--BOTON DE VER MAS-->
            <div class="buttons">
                <a href="../php/catalogo.php" class="button">Ver más</a>
            </div>
        </section>

        <!--ANUNCIO DEBAJO DEL NAV-->
        <div class="announcement-bar">
            <p></p>
        </div>
    </main>

    <!---MENCION 2° PHP PARA NAV Y FOOTER--->
    <?php
    $content = ob_get_clean(); // Obtener y limpiar el contenido del búfer
    include "../php/template.php"; // Incluir la plantilla
    ?>
    <!--MENCION DEL JAVASCRIPT -->
    <script src="../js/script.js"></script>
</body>
</html>