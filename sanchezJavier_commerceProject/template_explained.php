<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--
    We call CSS styles with this way because if we do otherwise, PHP echos won't apply the styles we write on 
    the CSS stylesheet. In the end it's basically the same result but, instead of calling the styles document, we are including
    it, so it will be fully functional.
    -->
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
        <!--
        If the "is_logged" COOKIE (which is built on the login page) is set, then we'll add a "tab" with the name of the user.
        If you click on it, it will send us to the user information page.
        -->
        <?php 
            if (isset($_COOKIE['is_logged'])) {
                echo "<a class='welcome' href='user_info.php'>Welcome, {$_COOKIE['username']}!</a>";
            }
        ?>
    </div>

    <div class="footer">
        Copyright 2023 ©, Javier Sánchez, Web Applications Implementation.
    </div>
    </body>
</html>