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

    <form action="password2.php" method="POST">

    <label for="oldPass">Introduzca a continuación su contraseña antigua:</label>
    <input type="password" name="oldPass" id="oldPass">

    <label for="newPass">Introduzca a continuación su nueva contraseña:</label>
    <input type="password" name="newPass" id="newPass">

    <label for="newPassCheck">Repita su nueva contraseña:</label>
    <input type="password" name="newPassCheck" id="newPassCheck">

    <input type="submit" value="SEND">
    <input type="reset" value="RESET">



    </form>


</body>
</html>