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
    
    // Area of a rectangle

    $b = 4;
    $h = 7;

    function Rarea($a, $b) {
        return $a * $b;
    }

    echo Rarea($b, $h);


    // Perimetre of a rectangle

    function Rperim($a, $b) {
        return $a*2 + $b*2;
    }
    
    echo Rperim($b, $h);


    // Switch values

    function switchValues(&$a, &$b) {
        $c;
        $a = $c;
        $a = $b;
        $b = $c;
        
    }

    switchValues($b, $h);

    echo $b, $h;

    ?>

</body>
</html>