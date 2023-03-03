<?php
    require("db_conn.php");
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
    <title>JSCOMMERCE - Register</title>
</head>
<body>
    <div class="topnav">
        <a href="index.php">Home</a>
        <a href="services.php">Services</a>
        <a class="active" href="register.php">Register</a>
        <a href="login.php">Login</a>
    </div>

    <?php
    
        try {

            $query = "INSERT INTO USERS(id, username, password, name, address, email) VALUES (?, ?, ?, ?, ?, ?)";

            $res = $conn -> prepare($query);

            $res -> bindParam(1, $_POST["id"]);
            $res -> bindParam(2, $_POST["username"]);
            $res -> bindParam(3, $_POST["password"]); 
            $res -> bindParam(4, $_POST["name"]); 
            $res -> bindParam(5, $_POST["address"]); 
            $res -> bindParam(6, $_POST["email"]); 
            
            $res -> execute();

            echo "<h1>You have been registered succesfully. Try to login <a href='login.php'>now</a>.</h1>";
        } 
        catch (PDOException){
            # In case the register fails, it will most probably be because the ID is already registered.
            echo "<h1>Your ID is already registered. Go to <a href='login.php'>login</a>.</h1>";
        }

    ?>
    <div class="footer">
        Copyright 2023 ©, Javier Sánchez, Web Applications Implementation.
    </div>
    </body>
</html>