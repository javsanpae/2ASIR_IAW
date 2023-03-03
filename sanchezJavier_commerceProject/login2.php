<?php
    require("db_conn.php");
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
    <title>JSCOMMERCE - Login</title>
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

        error_reporting(0);
            /* 
            This will avoid the next message
            when login is being done with incorrect
            credentials:

Warning: Trying to access array offset on value of type bool in /opt/lampp/htdocs/2ASIR_IAW/U5/e-commerce/logon.php on line 53  
            
            */


            # We'll check if the cookie is already created and avoid accesing this page to users which are logged in. This'll avoid some errors.
    if (isset($_COOKIE['is_logged'])) {
        exit("<p>Seems like you are already logged in. Please, log out first.</p>");
    }


        try {
            $id = $_POST['id'];
            $password = $_POST['password'];

            $query = "SELECT * FROM USERS WHERE id = ? AND password = ?";
            $result = $conn -> prepare($query);
            $result -> bindParam(1, $id);
            $result -> bindParam(2, $password);
            $result -> execute();

            $check = $result -> fetch();
            # Here we are checking if the user and password are correct. In case they are, 3 COOKIES are going to be created which will work for a month. 
            if ($id == $check['id'] and $password == $check['password']) {
                echo "<h1>You have been logged in successfully. Go back to <a href='index.php'>index</a>.</h1>";

                setcookie("user_id", $id, time()+86400*30, "/");
                setcookie("is_logged", True, time()+86400*30, "/");
                setcookie("username", $check['username'], time()+86400*30, "/");

            } else {
                echo "<h1>Incorrect credentials. Please, try again.</h1>";
            }
        } catch (PDOException $e) {
            echo $e;
        }
    
    
    ?>

    </body>
</html>