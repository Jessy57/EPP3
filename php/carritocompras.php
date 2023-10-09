<!--Mencion PHP--->
<?php
include("template/nav.php");
include("template/slider.php");
$products = array(
    array(
        'name' => 'Producto 1',
        'description' => 'Descripción del producto 1.',
        'price' => 50.00,
        'image' => 'producto1.jpg',
        'tags' => array('tag1', 'tag3'),
    ),
    array(
        'name' => 'Producto 2',
        'description' => 'Descripción del producto 2.',
        'price' => 40.00,
        'image' => 'producto2.jpg',
        'tags' => array('tag2', 'tag3'),
    ),
    // Agrega más productos aquí
);

// Obtén todas las etiquetas únicas de los productos
$allTags = array();
foreach ($products as $product) {
    $allTags = array_merge($allTags, $product['tags']);
}
$uniqueTags = array_unique($allTags);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos en Venta</title>
    <!-- Enlaza tu archivo CSS personalizado -->
    <link rel="stylesheet" href="tu_estilo.css">
</head>
<body>
    <div class="container">
        <h1>Productos en Venta</h1>

        <!-- Filtro de etiquetas -->
        <div>
            <h3>Filtrar por etiquetas:</h3>
            <?php foreach ($uniqueTags as $tag) { ?>
                <input type="checkbox" name="tag" value="<?= $tag ?>" id="<?= $tag ?>">
                <label for="<?= $tag ?>"><?= $tag ?></label>
            <?php } ?>
            <button id="filter-button">Filtrar</button>
        </div>

        <!-- Tarjetas de Producto -->
        <?php foreach ($products as $product) { ?>
            <div class="product-card" data-tags="<?= implode(' ', $product['tags']) ?>">
                <img src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>">
                <h2><?= $product['name'] ?></h2>
                <p><?= $product['description'] ?></p>
                <p>Precio: $<?= number_format($product['price'], 2) ?></p>
                <button class="add-to-cart" data-product-id="<?= $product['name'] ?>">Agregar al Carrito</button>
            </div>
        <?php } ?>
    </div>

    <!-- Carrito de Compras (puede ser un modal o una página separada) -->
    <div id="cart">
        <h2>Carrito de Compras</h2>
        <ul id="cart-items">
            <!-- Los productos agregados al carrito se mostrarán aquí -->
        </ul>
        <p>Total: $<span id="cart-total">0.00</span></p>
        <button id="checkout">Realizar Compra</button>
    </div>

    <!-- Enlaza tu archivo JavaScript personalizado -->
    <script src="tu_script.js"></script>
</body>
</html>



<!--Mencion PHP--->
<?php
include("template/footer.php");
?>