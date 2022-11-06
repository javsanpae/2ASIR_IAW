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

    function presentacion($n, $c, $a) {
        echo '<div>', $n, ' nacio en ', $c, 'en el año ', $a, '</div>';
    }

    presentacion('Alejandro', 'Madrid', 2004);
    presentacion('Patricia', 'Valencia', 2006);
    
    ?>

</body>
</html>