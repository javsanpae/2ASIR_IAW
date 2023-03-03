<?php
    require "hotelClass.php";
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

    $reservation = new Reservation($_POST["arrDate"], $_POST["depDate"], $_POST["cusName"], $_POST["roomsNumber"], $_POST["aduNumber"], $_POST["babyNumber"], $_POST["childNumber"], $_POST["breakfast"]);

    
    echo $reservation -> totalPrice();

    ?>
</body>
</html>