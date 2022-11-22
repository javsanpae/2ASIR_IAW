<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            margin: 30px;
            text-align: center;
        }

    </style>
</head>
<body>
    <?php

    function transposeMatrix($arr) {
        for ($i=0; $i < count($arr); $i++) {
            for($n=0; $n < count($arr[$i]); $n++) {
                $out[$n][$i] = $arr[$i][$n];
            }
        }
        return $out;
    }

    function showArray($arr, $type) {
        echo '<table><caption>', $type, '</caption>';
        for ($row=0; $row < count($arr); $row++) {
            echo '<tr>';
            for ($col = 0; $col < count($arr[$row]); $col++) {
                echo '<td>', $arr[$row][$col], '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    }

    function sumMatrix($arr1, $arr2) {
        $arrOut = array();
        for($row = 0; $row < count($arr1); $row++){
            for($col = 0; $col < count($arr1[$row]); $col++) {
                $arrOut[$row][$col] = $arr1[$row][$col] + $arr2[$row][$col];
            }
        }
        return $arrOut;
    }


    $matrix = array(

        array(2, 3, 6, 7, 0),
        array(5, 4, 6, 1, 8),
        array(8, 6, 1, 4, 5),
        array(7, 3, 6, 4, 9),
        array(5, 2, 4, 8, 7)

    );

    $transposed = transposeMatrix($matrix);
    showArray($matrix, 'ORIGINAL');
    showArray($transposed, 'TRANSPOSED');
    $result = sumMatrix($matrix, $transposed);
    showArray($result, 'SUM');

    ?>
</body>
</html>

