<?php
    session_start();
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
        
        echo "<h1>Pestaña de gestión de usuario</h1>";

        echo "<p>¿Qué quieres hacer, ", $_SESSION["username"], "?</p>";
        
        echo "<a href='password.php'>Cambiar su contraseña</a>";
        echo "<br/>";
        echo "<a href='suc.php'>Cambiar su nombre de usuario</a>";
        echo "<br/>";
        echo "<a href='suc.php'>Cambiar su correo electrónico</a>";
        echo "<br/>";
        echo "<a href='index.php'>Cambiar de usuario</a>";
        

    ?>


</body>
</html>