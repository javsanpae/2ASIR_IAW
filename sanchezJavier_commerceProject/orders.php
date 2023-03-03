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
        <a href="services.php">Services</a>
        <a href="register.php">Register</a>
        <a href="login.php">Login</a>
        <?php 
            if (isset($_COOKIE['is_logged'])) {
                echo "<a class='active welcome' href='user_info.php'>Welcome, {$_COOKIE['username']}!</a>";
            }
        ?>
    </div>

    <?php

# We'll retrieve the data of all orders a user has done.
    echo "<h1>LIST OF YOUR ORDERS:</h1>";
    $query = "SELECT * FROM Orders o
                INNER JOIN SERVICES s
                ON o.service_id = s.id
     WHERE o.user_id=? ORDER BY order_id DESC;";
    $result = $conn -> prepare($query);
    $result -> bindParam(1, $_COOKIE['user_id']);
    $result -> execute();

    echo "
        <table class='orderlist'>
            <tr>
                <th>ORDER ID</th>
                <th>SERVICE NAME</th>
                <th>ORDER DATE</th>
                <th>USER ID</th>
                <th>COMMENTS</th>
            </tr>
        ";
        while ($row = $result -> fetch()) {
            echo "
                <tr>
                    <td>{$row['order_id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['order_date']}</td>
                    <td>{$row['user_id']}</td>
                    <td>{$row['comments']}</td>
                </tr>
            ";
        }
        echo "</table>";


    ?>
    <div class="footer">
        Copyright 2023 ©, Javier Sánchez, Web Applications Implementation.
    </div>
    </body>
</html>