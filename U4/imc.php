<?php
    require 'imcClass.php';
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

    $person = new IMC;
    $person -> assignName('Javier');
    $person -> assignHeight(1.75);
    $person -> assignWeight(75);
    $person -> imcCalculation();

    echo "Hola, {$person -> name}. tu IMC es de aprox {$person -> imcCalculation()}.";

    


    ?>
</body>
</html>