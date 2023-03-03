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

        try {
            # We'll list again all the info of the user so it can see and change whatever it wants.
            $id = $_COOKIE['user_id'];
            $query = "SELECT * FROM USERS WHERE id = ?";
            $result = $conn -> prepare($query);
            $result -> bindParam(1, $id);
            $result -> execute();
            echo "<h1>Your current data:</h1>";
            $info = $result -> fetch();
            
            echo "
            <table>
                <tr>
                    <td>Your User ID:</td>
                    <td>{$info['id']}</td>
                </tr>
                <tr>
                    <td>Your Username:</td>
                    <td>{$info['username']}</td>
                </tr>
                <tr>
                    <td>Your Name:</td>
                    <td>{$info['name']}</td>
                </tr>
                <tr>
                    <td>Your Address:</td>
                    <td>{$info['address']}</td>
                </tr>
                <tr>
                    <td>Your e-mail:</td>
                    <td>{$info['email']}</td>
                </tr>
            </table>
            ";
        }
        catch (PDOException $e) {
            echo $e;
        }

        ?>

        <h2>Disclaimer: Your ID can <strong>NOT</strong> be changed.</h2>

        <form action="user_info3.php" method="post">
        <legend>If you don't want to change some of these fields, then leave them empty.</legend>

        <label for="alt_username">Your new username:</label>
        <input type="text" name="alt_username" id="alt_username">

        <label for="alt_name">Your new name:</label>
        <input type="text" name="alt_name" id="ne">

        <label for="alt_address">Your new address:</label>
        <input type="text" name="alt_address" id="alt_address">

        <label for="alt_email">Your new email:</label>
        <input type="email" name="alt_email" id="alt_email">

        <label for="alt_pass">Your new password:</label>
        <input type="password" name="alt_pass" id="alt_pass">

        <label for="curr_pass">Your <strong>current</strong> password:</label>
        <input type="password" name="curr_pass" id="curr_pass" required="required">

        <input type="submit" value="Send">
        <input type="reset" value="Reset">
        

        </form>

    <div class="footer">
        Copyright 2023 ©, Javier Sánchez, Web Applications Implementation.
    </div>
    </body>
</html>