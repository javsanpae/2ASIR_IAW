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

    $cine = array(
        "Friday" => array("4pm" => 200, "6pm" => 300, "8pm" => 400),
        "Saturday" => array()
    );



    $total_esp = 0;

    foreach($cine as $wday => $movies) {
        foreach ($movies as $movie => $sessions) {
            foreach ($sessions as $session => $viewers) {
                $total_esp = $total_esp + $viewers;
            }
        }
    }

    ?>
</body>
</html>