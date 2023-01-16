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

    $username = $_POST["username"];
    $pass = $_POST["pass"];

    $users = $_SESSION["users"];

    if ($username == "") {
        $msg = "<p>Usuario vacío.</p>";
    } else {
        foreach ($users as $uname => $password) {
            if ($username == $uname && $pass == $password) {
                $msg = "<p>Inicio de sesión satisfactorio. <a href='userManagement.php'>Inicio.</a></p>";
                $_SESSION["username"] = $username;
                break;
            } else if ($username != $uname) {
                $msg = "<p>Usuario incorrecto.</p>";
            } else if ($username == $uname && $pass != $password) {
                $msg = "<p>Contraseña incorrecta.</p>";
            }
        } 
    }
    echo $msg;

    


    ?>
</body>
</html>