<?php
    session_start();
    $visitDate = $_POST["visitDate"];
    setcookie("visitDateCookie", $visitDate, time() + 86400, "/");
    $_SESSION["visitKind"] = $_POST["visitKind"];
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
    <h1>Your data has been saved succesfully!</h1>  
    <p>Please, put in this box the number of visitors depending on their age:</p>

    <form action="sanchezJavier_u3Exam-Tickets.php" method="POST">

        <label for="children">CHILDREN (0-6 years old)</label>
        <input type="number" name="children" id="children" min="0"/>

        <label for="olderChildren">CHILDREN (6-12 years old)</label>
        <input type="number" name="olderChildren" id="olderChildren" min="0"/>

        <label for="adults">ADULTS (12+)</label>
        <input type="number" name="adults" id="adults" min="0"/>

        <input type="submit" value="Send"/>
        <input type="reset" value="Reset"/>

    </form>
</body>
</html>