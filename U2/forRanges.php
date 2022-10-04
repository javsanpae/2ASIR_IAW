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
    
    # Generate all pair numbers between 50 and 80

    for ($p = 50; $p <= 80; $p++) {
        if ($p % 2 == 0) {
            echo $p, ' ';
        }
    }

    # All whole numbers between -17 and 17.

    for ($i = -17; $i <= 17; $i++) {
        echo $i, ' ';
    }    

    ?>

</body>
</html>