<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras de Maquillaje</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <h1>Maquillaje</h1>
    
    <div class="products">
        <div class="product">
            <img src="maquillaje1.jpg" alt="Producto 1">
            <p>Producto 1</p>
            <p>Precio: $10.00</p>
            <button onclick="agregarAlCarrito(1)">Agregar al carrito</button>
        </div>
        <div class="product">
            <img src="maquillaje2.jpg" alt="Producto 2">
            <p>Producto 2</p>
            <p>Precio: $15.00</p>
            <button onclick="agregarAlCarrito(2)">Agregar al carrito</button>
        </div>
        <!-- Agrega más productos aquí -->
    </div>
    
    <h2>Carrito de Compras</h2>
    
    <div id="carrito">
        <!-- El carrito se mostrará aquí -->
    </div>

        <!---MENCION PHP PARA NAV Y FOOTER--->
        <?php
    $content = ob_get_clean(); // Obtener y limpiar el contenido del búfer
    include "../php/template.php"; // Incluir la plantilla
    ?>
    <!--MENCION DEL JAVASCRIPT -->
    <script src="../js/script.js"></script>
</body>
</html>
