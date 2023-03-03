<?php
    session_start();
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
    <title>JSCOMMERCE- Login</title>
</head>
<body>

    <div class="topnav">
        <a href="index.php">Home</a>
        <a href="services.php">Services</a>
        <a href="register.php">Register</a>
        <a class="active" href="login.php">Login</a>
        <?php 
            if (isset($_COOKIE['is_logged'])) {
                echo "<a class='welcome' href='user_info.php'>Welcome, {$_COOKIE['username']}!</a>";
            }
        ?>
    </div>
    <?php

    # In order to log in, you can't be logged in. Kinda logical.

    if (isset($_COOKIE['is_logged'])) {
        exit("<p>Seems like you are already logged in. Please, log out first.</p>");
    }
    
    echo '
    <form action="login2.php" method="post">
    <label for="id">YOUR ID:</label>
    <input type="text" name="id" id="id">
    <label for="password">Your password:</label>
    <input type="password" name="password" id="password">
    <input type="submit" value="Login">
    <input type="reset" value="Reset">
    </form> 
    ';
    
    ?>
    <div class="footer">
        Copyright 2023 ©, Javier Sánchez, Web Applications Implementation.
    </div>
    </body>
</html>
      
