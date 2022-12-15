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

    $users = array(
        "javsanpae" => "1234",
        "anonymous" => "1234"
    );

    if ($_POST["username"] == "") {
        echo "<p>Usuario vacío. Por favor, inténtelo de nuevo.</p>";
    } else {
        foreach ($users as $username => $password) {
            if ($_POST["username"] == $username and $_POST["pass"] == $password) {
                $_SESSION["username"] = $_POST["username"];
                echo "<p>El inicio de sesión ha sido satisfactorio. <a href='userManagement.php'>Inicio.</a></p>";
                break;
            } 
            //     else if ($_POST["username"] != $username) {
            //     echo "<p>El usuario no existe</p>";
                
            // } else if ($_POST["username"] == $username and $_POST["pass"] != $password) {
            //     echo "<p>La contraseña es incorrecta</p>";  
            // }
        }
    }
    
    



    ?>
</body>
</html>