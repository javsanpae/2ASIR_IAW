<?php
    include 'herenciaClass.php';
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

        $person1 = new sportsman("Javier", 19, 80, 1.75);

        echo "{$person1 -> showName()} is {$person1 -> showAge()} years old. Its weight is {$person1 -> showWeight()} and its height is {$person1 -> showHeight()}.";

    ?>
</body>
</html>