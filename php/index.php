<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mi Tienda en Línea</title>
    <!-- Enlaza los archivos CSS de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>

<!-- Barra de navegación y otros elementos -->
<?php
include("template/nav.php");
include("template/slider.php");
?>
<!---Seccion de catalogo - colecciones----> 
<h1>Revisa nuestras colecciones y catalogo </h1>

<!-- Modales de Promoción -->
<H1>¡Productos en descuento!</H1>
<div class="container my-5">
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="../img/perfumes/locion1.jpg" class="card-img-top producto-img" alt="Producto 1">
                <div class="card-body">
                    <h5 class="card-title">Producto 1</h5>
                    <p class="card-text">Descripción del producto.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalPromocion">Comprar</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="../img/perfumes/locion2.jpg" class="card-img-top producto-img" alt="Producto 2">
                <div class="card-body">
                    <h5 class="card-title">Producto 2</h5>
                    <p class="card-text">Descripción del producto.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalCatalogo">Comprar</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="../img/perfumes/locion3.jpg" class="card-img-top producto-img" alt="Producto 3">
                <div class="card-body">
                    <h5 class="card-title">Producto 3</h5>
                    <p class="card-text">Descripción del producto.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalColecciones">Comprar</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Sección de Opiniones de Influencers -->
<h1>Mira algunas de las reseñas de nuestros influencers!</h1>
<div class="card card-influencer">
  <img src="../IMG/PERSON/influencer1.png" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h5 class="card-title">Laura</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small>Last updated 3 mins ago</small></p>
  </div>
</div>

<div class="card card-influencer">
  <img src="../IMG/PERSON/influencer2.png" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h5 class="card-title">Laura</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small>Last updated 3 mins ago</small></p>
  </div>
</div>

<div class="card card-influencer">
  <img src="../IMG/PERSON/influencer2.png" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h5 class="card-title">Laura</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small>Last updated 3 mins ago</small></p>
  </div>
</div>
<!-- Pie de página y otros elementos -->
<?php
include("template/footer.php");
?>

</body>
</html>
