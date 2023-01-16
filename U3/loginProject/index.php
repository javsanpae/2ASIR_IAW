<?php
    session_start();
    $_SESSION["users"] = array(
        "javsanpae" => "1234",
        "anonymous" => "1234",
        "admin" => "admin",
        "webmaster" => "webmaster",
        "usuario" => "usuario",
        "andared" => "llevalatararaunvestidoblancollenodecascabeles"
    );
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
    <form action="checkData.php" method="post">

        <label for="username">USERNAME:</label>
        <input type="text" name="username" id="username">

        <label for="pass">PASSWORD:</label>
        <input type="password" name="pass" id="pass">


        <input type="submit" value="SEND">
        <input type="reset" value="RESET">

    </form>

</body>
</html>