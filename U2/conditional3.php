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

    $h = date("H");
    
        if ($h < 12){
        echo "<p>Good Morning!</p>";
        } elseif ($h >= 22){
            echo "<p>Good Night!</p>";
        } else {
            echo "<p>Good Evening!</p>";
        }

    ?>

</body>
</html>