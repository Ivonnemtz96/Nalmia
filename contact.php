<?
    include('indexController.php');   
?>
<!DOCTYPE html>
<html lang="es">
<?php
    $title = 'Contacto';
    $index = 'active';
    include("includes/head.php");
    include("includes/metricasHead.php");
?>

<body>

    <?php
    include("includes/metricasBody.php");
        include("includes/preloader.php");
        include('modules/'.$lenguaje.'/header.php');
        include('modules/'.$lenguaje.'/contact.php');
        include('modules/'.$lenguaje.'/footer.php');
        include("includes/scripts.php");
    ?>
</body>

</html>