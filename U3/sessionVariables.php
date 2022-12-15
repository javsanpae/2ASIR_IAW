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

    $_SESSION['nameSession'] = $_POST["name"];
    $_SESSION['surnamesSession'] = $_POST["surnames"];

    echo '<p>Haga click abajo para continuar</p>';

    echo '<a href="sessionVariables2.php">CLIC</a>';
    ?>

</body>
</html>