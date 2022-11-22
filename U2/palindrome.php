<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $value = 'salas';

    if (strrev($value) == $value) {
        echo 'Your word is a palindrome';
    } else {
        echo 'Your word is NOT a palindrome';
    }
    
    ?>


</body>
</html>