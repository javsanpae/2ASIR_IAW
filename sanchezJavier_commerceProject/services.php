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
    <title>JSCOMMERCE - Services</title>
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
    # List all available services
    $query = "SELECT * FROM SERVICES ORDER BY name ASC";
    $result = $conn -> prepare($query);
    $result -> execute();
    echo 
    "
    <table>
        <tr>
            <th>SERVICE NAME</th>
            <th>DESCRIPTION</th>
        </tr>
    ";
    while ($services = $result -> fetch()) {
        echo 
        "
        <tr>
            <td>{$services['name']}</td>
            <td>{$services['description']}</td>
        </tr>
        ";
    }
    echo 
    "
    </table>
    ";
    ?>

    <form action="checkout.php" method="post">
        <select name="service" id="service">
            <?php
            $query = "SELECT DISTINCT * FROM SERVICES ORDER BY name ASC;";
            $result = $conn -> prepare($query);
            $result -> execute();
            while ($service = $result -> fetch()) {
                # It will output as many options as services there are.
                echo "<option value={$service['id']}>{$service['name']}</option>";
            }
            ?>
        </select>
    
        <label for="comment">Do you want to tell something else to the technicians?</label>
        <input type="text" name="comment" id="comment">

        <input type="submit" value="Go to Checkout">
    </form>

    <div class="footer">
        Copyright 2023 ©, Javier Sánchez, Web Applications Implementation.
    </div>
    </body>
</html>