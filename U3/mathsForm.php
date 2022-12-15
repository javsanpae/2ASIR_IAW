<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        

    </style>


</head>
<body>
    
    <?php 

    $value1 = $_GET['value1'];
    
    $value2 = $_GET['value2'];


    echo 'La suma de los números es ', $value1 + $value2;

    echo '<br/>';

    echo 'La resta de los números es ', $value1 - $value2;

    echo '<br/>';

    echo 'La multiplicación de los números es ', $value1 * $value2;

    echo '<br/>';

    echo 'La división de los números es ', $value1 / $value2;

    echo '<br/>';

    echo 'El módulo de los números es ', $value1 % $value2;

    
    ?>

</body>
</html>