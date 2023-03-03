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

    $serv = "localhost";
    $user = "root";
    $clave = "";
    $db = "bendetto";

    # mysqli (funciones)
    $connection = mysqli_connect($serv, $user, $pass, $db);
    mysqli_close($connection);

    # mysqli (objetos)
    

    # pdo
    $conexion = new mysqli($serv, $user, $pass, $db);
    $conexion = null;


    ?>
</body>
</html>