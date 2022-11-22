<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            text-align: center;
        }
        table, th, tr, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <?php 

        /*

                                            *** JAVIER SÁNCHEZ PÁEZ, 2ºASIR-A ***

        A library recorded all its readers' name, surname, DNI, year of birth, telephone number and address. Due to a change
        in the managing operations, some of the DNI include the final letter while others don't. Write a script to deliver a table
        showing the name, surname and DNI with letter of those readers who were born before 1950. Use a function to add the letter
        to those DNI which don't have. The letter can be calculated by this algorithm:

        - Divide the number by 23

        - Take the remainder and look for its letter in this table:

            0 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20 21 22
            T R W A G M Y F O D X  B  N  J  Z  S  Q  V  H  L  C  K  E

        */

    function giveTable($arrayData) {
        echo "<table><th>NAME</th><th>SURNAME</th><th>DNI</th><th>BIRTHYEAR</th><th>TEL</th><th>ADDRESS</th>";
        for($i = 0; $i < count($arrayData); $i++) {
            if ($arrayData[$i][3] < 1950) {
                echo "<tr>";
                for ($c = 0; $c < count($arrayData[$i]); $c++) {
                    echo '<td>', $arrayData[$i][$c], '</td>';
                }
                echo '</tr>';
            } 
        }
        echo '</table>';
    };

    function addLetter($arrayData) {
        for ($i = 0; $i < count($arrayData); $i++) {
            if (strlen($arrayData[$i][2]) == 8) {
                $dniLetters = 
                array('T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E');
    
                $letter = $arrayData[$i][2] % 23;
                $letter = $dniLetters[$letter];
                echo 'El nuevo DNI de ', $arrayData[$i][0], ' ', $arrayData[$i][1], ' es ', $arrayData[$i][2], $letter, '<br>';
            }
        }
    }

    $library = array(
        array('Javier', 'Sánchez', '25320785', '2003', '644322856', 'Malaga Highway'),
        array('David', 'Díaz', '24067593864S', '1948', '664896726', 'Fontiveros Street')
    );

    giveTable($library);
    echo '<hr/>';
    addLetter($library);
    
    ?>    
</body>
</html>