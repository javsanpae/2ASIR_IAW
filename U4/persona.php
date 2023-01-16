<?php
    require 'personaClass.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $juan = new persona();
    $juan->asignaNombre('Juan');
    $juan->asignaEdad(25);

    echo "{$juan->devuelveNombre()} tiene {$juan->devuelveEdad()} años. ";

    #var_dump($juan instanceof persona);

    ?>
</body>
</html>