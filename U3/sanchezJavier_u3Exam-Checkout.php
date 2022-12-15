<?php
    session_start();
    setcookie("emailCookie", $_POST["mail"], time() + 86400, "/");
    setcookie("telCookie", $_POST["tel"], time() + 86400, "/");
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
    <h1>CHECKOUT</h1>

    <?php

        echo '<p>Tickets for ';

        if ($_SESSION["adults"] > 0) {
            echo intval($_SESSION["adults"]), " adults";
        } 


        if ($_SESSION["children"] > 0) {
            echo ', ', intval($_SESSION["children"]), " children (aged 0-6)";
        }

        if ($_SESSION["olderChildren"] > 0) {
            echo ', ', intval($_SESSION["olderChildren"]), " children (aged 6-12)";
        }

        echo ' in ';

        if ($_SESSION["visitKind"] == "normal") {
            echo 'normal visit, ';
        } else {
            echo 'dramatised visit, ';
        }

        echo $_COOKIE["visitDateCookie"], ': ';

        $totalPrice = 0;

        $normalVisit = array(
            "children" => 0,
            "olderChildren" =>  10,
            "adults" => 15
        );

        $dramaVisit = array(
            "children" => 0,
            "olderChildren" => 15,
            "adults" => 20
        );

        if ($_SESSION["visitKind"] == "normal") {
            foreach ($normalVisit as $index => $price) {
                $totalPrice = $totalPrice + $_SESSION[$index] * $price;
            }
        } else {
            foreach ($dramaVisit as $index => $price) {
                $totalPrice = $totalPrice + $_SESSION[$index] * $price;
            }
        }

        // if ($_SESSION["visitKind"] == "normal") {
        //     $totalPrice = $totalPrice + intval($_SESSION["adults"]) * $normalVisit["adults"];
        //     $totalPrice = $totalPrice + intval($_SESSION["olderChildren"]) * $normalVisit["children612"];
        //     $totalPrice = $totalPrice + intval($_SESSION["children"]) * $normalVisit["children06"];
        // } else {
        //     $totalPrice = $totalPrice + intval($_SESSION["adults"]) * $dramaVisit["adults"];
        //     $totalPrice = $totalPrice + intval($_SESSION["olderChildren"]) * $dramaVisit["children612"];
        //     $totalPrice = $totalPrice + intval($_SESSION["children"]) * $dramaVisit["children06"];
        // }

        echo $totalPrice, '€</p>';
    ?>
</body>
</html>