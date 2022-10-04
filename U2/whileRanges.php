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

    $p = 50;
    while ($p <= 80) {
        if ($p % 2 == 0) {
            echo $p, ' ';
        }
        $p++;
    }

    echo '<br>';

    # All whole numbers between -17 and 17.

    $i = -17;
    while ($i <= 17) {
        echo $i, ' ';
        $i++;
    }

    ?>

</body>
</html>