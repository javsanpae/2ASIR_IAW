<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
</head>
<body>
    
    <?php 
    
    $puestos = array('A210' => 28, 'A211' => 30, 'A212' => 32, 'A213' => 28);
    echo 'PUESTOS POR AULA';
    
    echo '<table> <tr> <th>Aula</th> <th>Número de puestos</th></tr>';
    foreach ($puestos as $aula => $numpuestos) {
    echo '<tr><td>', $aula, '</td><td>', $numpuestos, '</td></tr>' ;
    }
    echo '</table>';
    var_dump($puestos);
    ?>

</body>
</html>