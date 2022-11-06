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

    $weeklyRain = array("Monday" => 20, "Tuesday" => 30, "Wednesday" => 10, "Thursday" => 30, "Friday" => 60, "Saturday" => 100, "Sunday" => 5);

    $totalLiters = 0;

    foreach ($weeklyRain as $days => $liters) {
    $totalLiters = $totalLiters + $liters;
    }

    echo 'The total amount of rain this week was ', $totalLiters, ' liters per L/m^2';

    ?>

</body>
</html>