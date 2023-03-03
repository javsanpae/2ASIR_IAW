<?php
    session_start();
    require "Service.php";
    require "Ecommerce.php";
    require "Client.php";
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

# First we have to check the service is going to be done for a logged in client
    if(!isset($_COOKIE['is_logged'])) {
        exit("<h1>You have to <a href='login.php'>log in</a> first in order to request a service.</h1>");
    }
# We'll avoid errors if we can't detect the data of the previous page
    if(!isset($_POST['service'])) {
        exit("<h1>You don't have permissions to access this page. Please, do an order first.</h1>");
    }

    # First of all we'll insert the data into the orders table.
     # CURDATE() is a SQL function which generates the current date in the format YYYY-MM-DD.
    $query = "INSERT INTO Orders (service_id, order_date, user_id, comments) VALUES (?, CURDATE(), ?, ?)";
    $result = $conn -> prepare($query);
    $result -> bindParam(1, $_POST['service']);
    $result -> bindParam(2, $_COOKIE['user_id']);
    $result -> bindParam(3, $_POST['comment']);
    $result -> execute();

    # We'll create a variable called service which is based on an object called the same way.
    # This way we'll have all content we need to make the checkout into a single variable.
    $query = "SELECT * FROM SERVICES WHERE id=?";
    $result = $conn -> prepare($query);
    $result -> bindParam(1, $_POST['service']);
    $result -> execute();
    $service = $result -> fetchObject('Service');

    # We'll do the same with the ECOMMERCE content but, as we know we only have 1 result, we'll limit the content to 1
    # in order to avoid critical errors.
    $query = "SELECT * FROM ECOMMERCE LIMIT 1";
    $result = $conn -> prepare($query);
    $result -> execute();
    $ecommerce = $result -> fetchObject('Ecommerce');

    # We'll retrieve the information of the user requesting the service.
    $query = "SELECT * FROM USERS WHERE id=?";
    $result = $conn -> prepare($query);
    $result -> bindParam(1, $_COOKIE['user_id']);
    $result -> execute();
    $client = $result -> fetchObject('Client');

    echo "<h1>COMMERCIAL INVOICE:</h1>";

    # This structure is quite similar to the plumbery exercise we did some weeks ago.
    echo "<p class='from'>Commerce {$ecommerce -> name} ({$ecommerce -> id}), {$ecommerce -> address}</p>";
    echo "<p class='to'>Bill to {$client -> name} ({$client -> id}), {$client -> address}, {$client -> email}</p>";
    echo "<p>Price: {$service -> price}€</p>";

    echo 
    "
    <table class='orderlist'>
            <tr>
                <th>SERVICE NAME</th>
                <th>DEPARTMENT</th>
                <th>DESCRIPTION</th>
                <th>COMMENTS</th>
            </tr>
            <tr>
                <td>{$service -> name}</td>
                <td>{$service -> department}</td>
                <td>{$service -> description}</td>
                <td>{$_POST['comment']}</td>
            </tr>
    </table>
    
    <h2>Your order has been processed. For more information, go to your <a href='orders.php'>orders page</a>.</h2>
    ";



    ?>
</body>
</html>