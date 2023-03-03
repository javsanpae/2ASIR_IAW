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
    <title>JSCOMMERCE - Logged Out</title>
</head>
<body>
    <div class="topnav">
        <a href="index.php">Home</a>
        <a href="services.php">Services</a>
        <a href="register.php">Register</a>
        <a href="login.php">Login</a>
    </div>

    <?php

    # When we access this page, the cookies will be deleted.
    setcookie("username", "", time()-3600, "/");
    setcookie("user_id", "", time()-3600, "/");
    setcookie("is_logged", "", time()-3600, "/");

    echo "<h1>You have been logged out succesfully. Go back to <a href='index.php'>index</a>.</h1>"
    ?>

    <div class="footer">
        Copyright 2023 ©, Javier Sánchez, Web Applications Implementation.
    </div>
    </body>
</html>