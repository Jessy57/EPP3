
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Makeup</title>
</head>

<body>
    <header></header>
        <!---MENCION PHP PARA NAV Y FOOTER--->
        <?php
    $content = ob_get_clean(); // Obtener y limpiar el contenido del búfer
    include "../php/template.php"; // Incluir la plantilla
    ?>
    <!--MENCION DEL JAVASCRIPT -->
    <script src="../js/script.js"></script>
</body>

</html>