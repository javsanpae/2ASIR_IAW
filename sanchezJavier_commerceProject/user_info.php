<?php
    session_start();
    require 'db_conn.php';
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
    <title>JSCOMMERCE - Your Info</title>
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
    # This will generate a table with all the info of the user.
    try {
        $id = $_COOKIE['user_id'];
        $query = "SELECT * FROM USERS WHERE id = ?";
        $result = $conn -> prepare($query);
        $result -> bindParam(1, $id);
        $result -> execute();
        echo "<h1>Your profile:</h1>";
        $info = $result -> fetch();
        
        echo "
        <img class='profpic' src='./assets/images/profile_pic.jpg'/>
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
            <tr>
                <td><a href='user_info2.php'>Edit your info</a></td>
                <td><a href='logout.php'>Log out</a></td>
            </tr>
            <tr>
        ";
        if ($_COOKIE['user_id'] == "admin") {
            # In case this user is admin, it'll see a different link pointing to the administration panel.
            echo "<td colspan='2'><a href='admin.php'>Open the Administration Panel</a></td>";
        } else {
            echo "<td colspan='2'><a href='orders.php'>Open your Orders Page</a></td>";
        }
        echo 
        "
            </tr>
        </table>
        ";



    


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