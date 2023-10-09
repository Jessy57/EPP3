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
    <title>Productos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
 <!-- Sección de etiquetas para filtrar productos -->
  <div class="row">
    <div class="col-md-3">
      <h3>Etiquetas</h3>
      <label><input type="checkbox" name="tag" value="tag1"> Etiqueta 1</label><br>
      <label><input type="checkbox" name="tag" value="tag2"> Etiqueta 2</label><br>
      <label><input type="checkbox" name="tag" value="tag3"> Etiqueta 3</label><br>
      <!-- Agrega más etiquetas según sea necesario -->
      <button id="filter-button">Filtrar</button>
    </div>
  </div>
<div class="container">
  <div class="row">
    <!-- Tarjetas de productos en una fila horizontal -->
    <div class="col-md-4">
      <div class="product-card">
        <img src="../img/img11.png" alt="Producto 1" class="product-img">
        <h3 class="product-title">Producto 1</h3>
        <p class="product-price">$19.99</p>
        <p class="product-description">Descripción del producto 1. Lorem ipsum dolor sit amet.</p>
        <button class="add-to-cart" data-product-id="1">Agregar al Carrito</button>
      </div>
    </div>
    <div class="col-md-4">
      <div class="product-card">
        <img src="../img/img11.png" alt="Producto 2" class="product-img">
        <h3 class="product-title">Producto 2</h3>
        <p class="product-price">$29.99</p>
        <p class="product-description">Descripción del producto 2. Lorem ipsum dolor sit amet.</p>
        <button class="add-to-cart" data-product-id="2">Agregar al Carrito</button>
      </div>
    </div>
    <div class="col-md-4">
      <div class="product-card">
        <img src="../img/img11.png" alt="Producto 3" class="product-img">
        <h3 class="product-title">Producto 3</h3>
        <p class="product-price">$24.99</p>
        <p class="product-description">Descripción del producto 3. Lorem ipsum dolor sit amet.</p>
        <button class="add-to-cart" data-product-id="3">Agregar al Carrito</button>
      </div>
    </div>
  </div>
 
</div>

<!-- Script para manejar la funcionalidad de filtrado -->
<script src="script.js"></script>

</body>
</html>



<!--Mencion PHP--->
<?php
include("template/footer.php");
?>