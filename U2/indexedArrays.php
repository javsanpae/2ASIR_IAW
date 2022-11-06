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

    $bebidas = array('Fanta', 'Pepsi', 'Trina', 'Coke', 'Wine', 'Beer');

    echo 'Choose between these ', count($bebidas), ' drinks available.';

    $_2asir = array('IAW', 'SAD', 'ASO', 'SRI', 'HLC', 'ASGBD');

    echo '<h1>ASIR</h1>';

    foreach ($_2asir as $modules) { 
        echo $modules, ' ';
    }

    echo '<br/>';

    $cuenta = count($_2asir) - 1;

    for($i = 0; $i <= $cuenta; $i++) {
        echo $_2asir[$i], ' ';
    }

    ?>

</body>
</html>