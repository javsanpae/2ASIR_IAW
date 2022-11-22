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

    function transposeAsociativeMatrix($arr) {
        $out = array();
        foreach($arr as $ind => $subarr) {
            foreach($subarr as $subind => $val) {
                $out[$subind][$ind] = $arr[$ind][$subind];
            }
        }
        return $out;
    }

    function showAsociativeArray($arr, $type){
        echo '<table><caption>', $type, '</caption>';
        foreach($arr as $ind => $subarr) {
            echo '<tr>';
            foreach($subarr as $subind => $val) {
                echo '<td>', $arr[$ind][$subind], '</td>';

            }
            echo '</tr>';
        }
        echo '</table>';
    }

    function sumAsociativeRows($arr) {
        foreach ($arr as $ind => $subarr) {
            $out = 0;
            foreach($subarr as $subind => $val) {
                $out = $out + $val;
            }
        }
        return $out;
    }

    $movies = array(
        "Spiderman" => array("4pm" => 300, "6pm" => 200, "8pm" => 500),
        "Tarzan" => array("4pm" => 200, "6pm" => 500, "8pm" => 400),
        "Mulan" => array("4pm" => 300, "6pm" => 400 , "8pm" => 500),
        "Dumbo" => array("4pm" => 100, "6pm" => 300, "8pm" => 200)
    );

    $results = transposeAsociativeMatrix($movies);

    showAsociativeArray($results, 'TRANSPOSED');

    echo sumAsociativeRows($results);
    
    ?>    
</body>
</html>