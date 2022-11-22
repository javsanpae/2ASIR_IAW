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
    
    $_1value = $_POST["_1number"];
    
    $_2value = $_POST["_2number"];


    echo 'La suma de los números es ', $_1value + $_2value;

    echo '<br/>';

    echo 'La resta de los números es ', $_1value - $_2value;

    echo '<br/>';

    echo 'La multiplicación de los números es ', $_1value * $_2value;

    echo '<br/>';

    echo 'La división de los números es ', $_1value / $_2value;

    
    ?>

</body>
</html>