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

    /*
    An anemometer recorded the speed of the wind every hour of a day.
    Write a script to deliver the highest speed and the time(s) in which it happened.
    */

    $anemoStats = array("1am" => 5, "2am" => 3, "3am" => 4, "4am" => 10, "5am" => 4, "6am" => 4, "7am" => 4, "8am" => 2, "9am" => 7, "10am" => 16, "11am" => 4, "12am" => 4, "1pm" => 33, "2pm" => 2, "3pm" => 5, "4pm" => 1, "5pm" => 6, "6pm" => 7, "7pm" => 9, "8pm" => 8, "9pm" => 5, "10pm" => 22, "11pm" => 0, "12pm" => 3);

    // In this variables we'll save the highest value and the hour.
    $maxValue = 0;
    $maxHour = '';

    // This foreach reads all the values of the array and checks each one of them.
    foreach ($anemoStats as $hour => $value) { 
        // This maxValue variable will check itself and compare to each one of the values of the array given. If it's bigger, then it doesn't do nothing, but if it's smaller it'll change its value and it will save the hour on the maxHour variable.
        if ($value > $maxValue) {
            $maxValue = $value;
            $maxHour = $hour;
        }
    }

    echo 'The maximum value taken by our anemometer was ', $maxValue, ' and it was taken at ', $maxHour;

    ?>

</body>
</html>