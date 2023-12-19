<!DOCTYPE html>
<html lang="es">
<?php
    $title = 'Inicio';
    $index = 'active';
    include("includes/head.php");
    include("includes/metricasHead.php");

?>

<body>

    <?php
        include("includes/metricasBody.php");
        include("includes/preloader.php");
        include("includes/header.php");
        include("modules/investment.php");
        include("modules/form-paginas.php");
        include("includes/footer.php");
        include("includes/scripts.php");
    ?>
</body>

</html>