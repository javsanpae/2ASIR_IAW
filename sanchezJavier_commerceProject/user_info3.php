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
                echo "<a class='welcome' href='user_info.php'>Welcome, {$_COOKIE['username']}!</a>";
            }
        ?>
    </div>

    <?php

                /* 
            This will avoid the next message
            when modifying data is being done with incorrect
            credentials:

Warning: Array to string conversion in /opt/lampp/htdocs/2ASIR_IAW/U5/e-commerce/user_info3.php on line 36
            
            */

            error_reporting(0);

    $query = "SELECT password from USERS where id=?";
    $result = $conn -> prepare($query);
    $result -> bindParam(1, $_COOKIE['user_id']);
    $result -> execute();
    $check = $result -> fetch();
    
    if ($_POST['curr_pass'] != $check['password']) {
        # In order to make changes, the user must put its current password.
        exit("<h1>You didn't enter your current password correctly. Please, try it again.</h1>");
    } 

            try {
                # Case 1: If the user has changed its username, the cookie will be renewed too.
                if ($_POST['alt_username'] != "") {
                    $query = "UPDATE USERS SET username=? WHERE id=?";
                    $result = $conn -> prepare($query);
                    $result -> bindParam(1, $_POST['alt_username']);
                    $result -> bindParam(2, $_COOKIE['user_id']);
                    $result -> execute();
                    setcookie("username", $_POST['alt_username'], time()+86400*30, "/");
                    echo "<p>Your username has been changed.</p>";
                }

                # Case 2: User changed its name.
                if ($_POST['alt_name'] != "") {
                    $query = "UPDATE USERS SET name=? WHERE id=?";
                    $result = $conn -> prepare($query);
                    $result -> bindParam(1, $_POST['alt_name']);
                    $result -> bindParam(2, $_COOKIE['user_id']);
                    $result -> execute();
                    echo "<p>Your name has been changed.</p>";
                }

                # Case 3: User changed its address.
                if ($_POST['alt_address'] != "") {
                    $query = "UPDATE USERS SET address=? WHERE id=?";
                    $result = $conn -> prepare($query);
                    $result -> bindParam(1, $_POST['alt_address']);
                    $result -> bindParam(2, $_COOKIE['user_id']);
                    $result -> execute();
                    echo "<p>Your address has been changed.</p>";
                }

                # Case 4: User changed its email.
                if ($_POST['alt_email'] != "") {
                    $query = "UPDATE USERS SET email=? WHERE id=?";
                    $result = $conn -> prepare($query);
                    $result -> bindParam(1, $_POST['alt_email']);
                    $result -> bindParam(2, $_COOKIE['user_id']);
                    $result -> execute();
                    echo "<p>Your email has been changed.</p>";
                }

                # Case 5: User changed its password.
                if ($_POST['alt_pass'] != "") {
                    $query = "UPDATE USERS SET password=? WHERE id=?";
                    $result = $conn -> prepare($query);
                    $result -> bindParam(1, $_POST['alt_password']);
                    $result -> bindParam(2, $_COOKIE['user_id']);
                    $result -> execute();
                    echo "<p>Your password has been changed.</p>";
                }

                echo "<h1>Done. Go back to <a href='index.php'>index</a>.</h1>";

            }
            catch (PDOException $e) {
                echo $e;
            }
        

    ?>



    <div class="footer">
        Copyright 2023 ©, Javier Sánchez, Web Applications Implementation.
    </div>
    </body>
</html>