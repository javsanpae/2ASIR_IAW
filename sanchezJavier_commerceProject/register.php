<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSCOMMERCE - Register</title>
    <style>
        <?php require "./assets/css/style.css"; ?>
    </style>
</head>
<body>
    <div class="topnav">
        <a href="index.php">Home</a>
        <a href="services.php">Services</a>
        <a class="active" href="register.php">Register</a>
        <a href="login.php">Login</a>
        <?php 
            if (isset($_COOKIE['is_logged'])) {
                echo "<a class='welcome' href='user_info.php'>Welcome, {$_COOKIE['username']}!</a>";
            }
        ?>
    </div>

    <?php 

    # If you are already logged in you can't register an account.
    if (isset($_COOKIE['is_logged'])) {
        exit("<p>Seems like you are already registered. Please, log out first.</p>");
    } 
    echo '
        <form action="register2.php" method="post">
            <label for="id">Your ID (CIF/NIF):</label>
            <input type="text" name="id" id="id" required="required">


            <label for="username">Your username:</label>
            <input type="text" name="username" id="username" required="required">


            <label for="password">Your password:</label>
            <input type="password" name="password" id="password" required="required">

            <label for="name">Your name:</label>
            <input type="text" name="name" id="name" required="required">

            <label for="address">Your address:</label>
            <input type="text" name="address" id="address" required="required">

            <label for="email">Your email:</label>
            <input type="email" name="email" id="email" required="required">

            <input type="submit" value="Register">
            <input type="reset" value="Reset">
        </form>
    ';
    
    
    ?>

    <div class="footer">
        Copyright 2023 ©, Javier Sánchez, Web Applications Implementation.
    </div>
    </body>
</html>