<?php
    session_start()
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

    if ($_POST["oldPass"] != $_SESSION["users"][$_SESSION["username"]]) {
        $msg = "<p>Su contraseña antigua ha sido introducida incorrectamente.</p>";
    } else if ($_POST["newPass"] != $_POST["newPassCheck"]) {
        $msg = "<p>Ha puesto dos contraseñas nuevas distintas.</p>";
        } else if ($_POST["newPass"] != $_POST["newPassCheck"]) {
            $msg = "<p>Ha puesto dos contraseñas nuevas distintas.</p>";
        } else {
            $_SESSION["users"][$_SESSION["username"]] = $_POST["newPass"];
            $msg = "<p>Su contraseña ha sido modificada correctamente.</p>";
            var_dump($_SESSION["users"][$_SESSION["username"]]);
        }
    
    echo $msg, "<a href='userManagement.php'>Inicio.</a>";


    ?>
</body>
</html>