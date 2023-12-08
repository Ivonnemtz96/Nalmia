<?
    include('indexController.php');   
?>
<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Inicio';
    $index = 'active';
    include("includes/head.php");
?>
<?
if (isset($_GET)) {
  include_once("php/msg.php");
}
?>
<body>

    <?php
        include("includes/preloader.php");
        include('modules/'.$lenguaje.'/header.php');
        include('modules/'.$lenguaje.'/index.php');
        include('modules/'.$lenguaje.'/form-paginas.php');

        include('modules/'.$lenguaje.'/footer.php');
        include("includes/scripts.php");
    ?>
</body>

</html>