<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>The number of visitors has been saved. Check there are no errors down below.</h1>

    <p>We don't have your data stored in our database, so please write it down below:</p>

    <form action="sanchezJavier_u3Exam-Checkout.php" method="POST">

    <label for="name">Your name:</label>
    <input type="text" name="name" id="name">

    <label for="surname">Your surname(s):</label>
    <input type="text" name="surname" id="surname">

    <label for="mail">Your E-mail:</label>
    <input type="email" name="mail" id="mail">

    <label for="tel">Your telephone number:</label>
    <input type="tel" name="tel" id="tel">

    <input type="submit" value="Send">
    <input type="reset" value="Reset">

    </form>

    <?php
        $_SESSION["children"] = $_POST["children"];
        $_SESSION["olderChildren"] = $_POST["olderChildren"];
        $_SESSION["adults"] = $_POST["adults"];
    ?>
</body>
</html>