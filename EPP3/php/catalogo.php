<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <script src="../js/script.js"></script>
    <title>Catalogo</title>

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

/* Estilo para el título del producto */
.producto h2 {
    font-size: 18px;
    margin: 0;
}

/* Estilo para el precio del producto */
.producto p {
    font-size: 16px;
    margin: 5px 0;
}

/* Estilo para el botón "Agregar al carrito" */
.producto input[type="submit"] {
    background-color: #007BFF;
    color: blue;
    padding: 5px 10px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    font-size: 16px;
}

/* Cambio de color al pasar el mouse sobre el botón */
.producto input[type="submit"]:hover {
    background-color: #0056b3;
}

/* Estilo para la descripción del producto */
.producto p:last-child {
    font-size: 14px;
    color: #666;
    margin-top: 10px;
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
</style>
<h1>Catálogo de Productos Barbie</h1>
<div class="column">
  <!-- Producto 1 -->
<div class="producto">
    <img src="../img/perfumes/locion1.jpg" width="200" height="200" alt="Miss Dior">
    <h2>Miss Dior</h2>
    <p>Precio: $19.99</p>
    <form action="carritocompras.php" method="POST">
        <input type="hidden" name="producto_id" value="1">
        <input type="submit" name="agregar_al_carrito" value="Agregar al carrito">
    </form>
    <p>Descripción: Suave aroma para gustos juveniles</p>
</div>

<!-- Producto 2 -->
<div class="producto">
    <img src="../img/perfumes/locion2.jpg" width="200" height="200" alt="Soul">
    <h2>Soul</h2>
    <p>Precio: $24.99</p>
    <form action="carritocompras.php" method="POST">
        <input type="hidden" name="producto_id" value="2">
        <input type="submit" name="agregar_al_carrito" value="Agregar al carrito">
    </form>
    <p>Descripción: Conquístalo con un ligero toque del alma.</p>
</div>

<!-- Producto 3 -->
<div class="producto">
    <img src="../img/productos/Base de Maquillaje.jpg" width="200" height="200" alt="Base de Maquillaje">
    <h2>Base de Maquillaje</h2>
    <p>Precio: $15.99</p>
    <form action="carritocompras.php" method="POST">
        <input type="hidden" name="producto_id" value="3">
        <input type="submit" name="agregar_al_carrito" value="Agregar al carrito">
    </form>
    <p>Descripción: Base de maquillaje de larga duración</p>
</div>

<!-- Producto 4 -->
<div class="producto">
    <img src="../img/productos/neutrogena-crema.jpg" width="200" height="200" alt="Crema hidratante">
    <h2>Crema Hidratante</h2>
    <p>Precio: $9.99</p>
    <form action="carritocompras.php" method="POST">
        <input type="hidden" name="producto_id" value="4">
        <input type="submit" name="agregar_al_carrito" value="Agregar al carrito">
    </form>
    <p>Descripción: Crema hidratante para pieles secas.</p>
</div>
</div>

<div class="column">
<!-- Producto 5 -->
<div class="producto">
    <img src="../img/productos/Labial color Revlon.jpg" width="200" height="200" alt="Labial de Color">
    <h2>Labial de Color</h2>
    <p>Precio: $8.49</p>
    <form action="carritocompras.php" method="POST">
        <input type="hidden" name="producto_id" value="5">
        <input type="submit" name="agregar_al_carrito" value="Agregar al carrito">
    </form>
    <p>Descripción: Labial de larga duración en varios colores</p>
</div>

<!-- Producto 6 -->
<div class="producto">
    <img src="../img/productos/Loción Facial Olay.jpg" width="200" height="200" alt="Loción Facial">
    <h2>Loción Facial</h2>
    <p>Precio: $12.95</p>
    <form action="carritocompras.php" method="POST">
        <input type="hidden" name="producto_id" value="6">
        <input type="submit" name="agregar_al_carrito" value="Agregar al carrito">
    </form>
    <p>Descripción: Loción hidratante para el rostro.</p>
</div>

<!-- Producto 7 -->
<div class="producto">
    <img src="../img/productos/lote-de-2-paletas-de-sombras-mac-.jpg" width="200" height="200" alt="Sombras de Ojos">
    <h2>Sombras de Ojos</h2>
    <p>Precio: $11.99</p>
    <form action="carritocompras.php" method="POST">
        <input type="hidden" name="producto_id" value="7">
        <input type="submit" name="agregar_al_carrito" value="Agregar al carrito">
    </form>
    <p>Descripción: Paleta de sombras de ojos en tonos naturales</p>
</div>

<!-- Producto 8 -->
<div class="producto">
    <img src="../img/productos/Gel de ducha Dove.jpg" width="200" height="200" alt="Gel de Ducha">
    <h2>Gel de Ducha</h2>
    <p>Precio: $5.49</p>
    <form action="carritocompras.php" method="POST">
        <input type="hidden" name="producto_id" value="8">
        <input type="submit" name="agregar_al_carrito" value="Agregar al carrito">
    </form>
    <p>Descripción: Gel de ducha hidratante con aroma a rosas.</p>
</div>
</div>

<div class="column">
<!-- Producto 9 -->
<div class="producto">
    <img src="../img/productos/Esmalte uñas essie.jpg" width="200" height="200" alt="Esmalte de uñas">
    <h2>Esmalte de uñas</h2>
    <p>Precio: $6.99</p>
    <form action="carritocompras.php" method="POST">
        <input type="hidden" name="producto_id" value="9">
        <input type="submit" name="agregar_al_carrito" value="Agregar al carrito">
    </form>
    <p>Descripción: Esmalte de uñas de larga duración en colores vibrantes</p>
</div>

<!-- Producto 10 -->
<div class="producto">
    <img src="../img/productos/Máscara de pestañas Loreal.jpg" width="200" height="200" alt="Máscara de Pestañas">
    <h2>Máscara de Pestañas</h2>
    <p>Precio: $7.49</p>
    <form action="carritocompras.php" method="POST">
        <input type="hidden" name="producto_id" value="10">
        <input type="submit" name="agregar_al_carrito" value="Agregar al carrito">
    </form>
    <p>Descripción: Máscara de pestañas resistente al agua.</p>
</div>

<!-- Producto 11 -->
<div class="producto">
    <img src="../img/productos/la-roche-posay.jpg" width="200" height="200" alt="Crema antiarrugas">
    <h2>Crema Antiarrugas</h2>
    <p>Precio: $19.99</p>
    <form action="carritocompras.php" method="POST">
        <input type="hidden" name="producto_id" value="11">
        <input type="submit" name="agregar_al_carrito" value="Agregar al carrito">
    </form>
    <p>Descripción: Crema antiarrugas con ácido hialurónico</p>
</div>

<!-- Producto 12 -->
<div class="producto">
    <img src="../img/productos/Perfume Floral Chanel.jpg" width="200" height="200" alt="Perfume Floral">
    <h2>Perfume Floral</h2>
    <p>Precio: $69.99</p>
    <form action="carritocompras.php" method="POST">
        <input type="hidden" name="producto_id" value="12">
        <input type="submit" name="agregar_al_carrito" value="Agregar al carrito">
    </form>
    <p>Descripción: Fragancia floral con notas de jazmín y rosas.</p>
</div>
</div> 
<script>
document.addEventListener("DOMContentLoaded", function () {
    const botonesAgregarAlCarrito = document.querySelectorAll(".agregar-al-carrito");

    botonesAgregarAlCarrito.forEach((boton) => {
        boton.addEventListener("click", function () {
            const productoId = boton.getAttribute("data-producto-id");
            agregarAlCarrito(productoId);
        });
    });

    function agregarAlCarrito(productoId) {
        // Realizar una solicitud AJAX al servidor para agregar el producto al carrito
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "carritocompras.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Manejar la respuesta del servidor (puedes mostrar un mensaje o actualizar el carrito)
                alert("Producto agregado al carrito");
            }
        };
        xhr.send("producto_id=" + encodeURIComponent(productoId));
    }
});
</script>
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