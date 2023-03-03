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

#  Warning: Undefined array key "user_id" in /opt/lampp/htdocs/2ASIR_IAW/e-commerce/admin.php on line 32
    error_reporting(0);
    # We ensure the only user that can access here is the admin user. We can add pipes to add more "valid" users.
    if ($_COOKIE['user_id'] != 'admin') {
        exit("<h1>You don't have permissions to access to this place.</h1>");
    } 


    # This will essentially list all content we have on the database, so the admin user can have a bit of "GUI" control over the page.


        echo "<h1>LIST OF ALL REGISTERED USERS:</h1>";
        $query = "SELECT * FROM USERS ORDER BY username ASC;";
        $result = $conn -> prepare($query);
        $result -> execute();
    
        echo "
            <table class='orderlist'>
                <tr>
                    <th>ID</th>
                    <th>USERNAME</th>
                    <th>NAME</th>
                    <th>ADDRESS</th>
                    <th>EMAIL</th>
                </tr>
            ";
            while ($row = $result -> fetch()) {
                echo "
                    <tr>
                        <td>{$row['id']}</td>
                        <td>{$row['username']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['address']}</td>
                        <td>{$row['email']}</td>
                    </tr>
                ";
            }
            echo "</table>";
    
            echo "<h1>LIST OF ALL REGISTERED SERVICES:</h1>";
            $query = "SELECT * FROM SERVICES ORDER BY price ASC";
            $result = $conn -> prepare($query);
            $result -> execute();
            echo "
                <table class='orderlist'>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>PRICE</th>
                        <th>DEPARTMENT</th>
                        <th>DESCRIPTION</th>
                    </tr>
                ";
            while ($row = $result -> fetch()) {
                echo "
                    <tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['price']}</td>
                        <td>{$row['department']}</td>
                        <td>{$row['description']}</td>
                    </tr>
                ";
            }
            echo "</table>";
    
            echo "<h1>LIST OF ALL ORDERS:</h1>";
            $query = "SELECT * FROM Orders ORDER BY order_id DESC";
            $result = $conn -> prepare($query);
            $result -> execute();
            echo "
                <table class='orderlist'>
                    <tr>
                        <th>ORDER ID</th>
                        <th>SERVICE ID</th>
                        <th>ORDER DATE</th>
                        <th>USER ID</th>
                        <th>COMMENTARIES</th>
                    </tr>
                ";
            while ($row = $result -> fetch()) {
                echo "
                    <tr>
                        <td>{$row['order_id']}</td>
                        <td>{$row['service_id']}</td>
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