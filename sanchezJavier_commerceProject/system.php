<?php
    session_start();
    require "db_conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
      <?php require "./assets/css/style.css"; ?>
    </style>


    <title>JSCOMMERCE</title>
</head>
<body>
    <div class="topnav">
        <a href="index.php">Home</a>
        <a class="active" href="services.php">Services</a>
        <a href="register.php">Register</a>
        <a href="login.php">Login</a>

        <?php 
            if (isset($_COOKIE['is_logged'])) {
                echo "<a class='welcome' href='user_info.php'>Welcome, {$_COOKIE['username']}!</a>";
            }
        ?>
    </div>
    <?php

    $query = "SELECT * FROM SERVICES WHERE department=? ORDER BY name ASC";
    $result = $conn -> prepare($query);
    $result -> bindParam(1, $bind);
    $bind = 'SYSTEM';
    $result -> execute();
    echo "<h1>AVAILABLE {$bind} SERVICES AT JS.COMMERCE:</h1>";
    
    echo 
    "
    <table class='orderlist'>
            <tr>
                <th>NAME</th>
                <th>PRICE</th>
                <th>DESCRIPTION</th>
            </tr>
    ";
    while ($data = $result -> fetch()) {
        echo 
        "
            <tr>
                <td>{$data['name']}</td>
                <td>{$data['price']}</td>
                <td>{$data['description']}</td>
            </tr>
        ";
    }
    echo 
    "
    </table>
    ";


    ?>
    <div class="footer">
        Copyright 2023 ©, Javier Sánchez, Web Applications Implementation.
    </div>
    </body>
</html>