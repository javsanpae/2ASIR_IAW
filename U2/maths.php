<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maths in PHP</title>
</head>
<body>

    <?php 

    #Exercise 1:
    $r = 12;
    echo 'The length of a 12cm radius circle is ', pi()*2 * $r;
    echo ', the area is ', pi() * $r**2;
    echo 
    
    #Exercise 2:
    $fN = 7;
    $sN = 4;
    echo '. The addition, substraction, product, division, module and power of 7 and 4 is ';
    echo $fN + $sN, ', ';
    echo $fN - $sN, ', ';
    echo $fN * $sN, ', ';
    echo $fN / $sN, ', ';
    echo $fN % $sN, ', ';
    echo $fN ** $sN, ' respectively. ';

    #Exercise 3:
    $h = 'Hello';
    $w = 'World!';
    echo $h . ' ' . $w;

    ?>

</body>
</html>