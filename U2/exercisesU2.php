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

    # 1. Given a number, deliver its absolute value as an output
    echo '1. ';

    $ex1 = -6;

    if ($ex1 >= 0) {
        echo $ex1;
    } else {
        $ex1 = $ex1 * -1;
        echo $ex1;
    }

    echo '<hr/>';

    # 2. Given two numbers, deliver a message that points out the biggest one.

    echo '2. ';

    $ex2v1 = 10;
    $ex2v2 = 11;

    if ($ex2v1 > $ex2v2) {
        echo $ex2v1;
    } else if ($ex2v2 > $ex2v1) {
        echo $ex2v2;
    } else {
        echo 'ERROR';
    }

    echo '<hr/>';


    # 3. Enhance the previous code in order to show if both numbers are the same.
    echo '3. ';

    $ex2v1 = 4;
    $ex2v2 = 4;

    if ($ex2v1 > $ex2v2) {
        echo $ex2v1, ' is greater than ', $ex2v2;
    } else if ($ex2v2 > $ex2v1) {
        echo $ex2v2, ' is greater than ', $ex2v1;
    } else {
        echo 'Both numbers are the same.';
    }

    echo '<hr/>';

    # 4. Given two numbers, deliver a message to show them ordered from the smallest to the biggest
    echo '4. ';

    $ex4v1 = 5;
    $ex4v2 = 5;

    if ($ex4v1 > $ex4v2) {
        echo $ex4v2, ', ', $ex4v1;
    } else if ($ex4v2 > $ex4v1) {
        echo $ex4v1, ', ', $ex4v2; 
    } else {
        echo 'Both numbers are the same.';
    }

    echo '<hr/>';

    # 5. Given a year, deliver a message to point out whether it is a leap one or not. Leap years are those which are divisible by 4, except for those which are divisible by 100 without being by 400.

    echo '5. ';

    $ex5 = 2011;

    if ($ex5 % 4 == 0 AND $ex5 % 100 != 0 OR $ex5 % 400 == 0) {
        echo $ex5, ' is a leap year';
    } else {
        echo $ex5, ' is not a leap year';    
    }

    echo '<hr/>';

    # 6. Deliver the sum of the numbers from 1 to 100

    echo '6. ';

    $ex6v1 = 0;
    $ex6v2 = 0;

    while ($ex6v1 <= 100) {
        $ex6v2 = $ex6v2 + $ex6v1;
        $ex6v1++;
    }

    echo $ex6v2;


    echo '<hr/>';

    # 7. Deliver the factorial of 10

    echo '7. ';

    $ex7 = 1;
    for ($i = 1; $i <= 10; $i++){ 
        $ex7 = $ex7 * $i; 
    }
    echo $ex7;


    echo '<hr/>';

    # 8. Given an integer, deliver all its divisors.

    echo '8. ';

    $ex8 = 100;

    for ($i = 1; $i <= $ex8; $i++) {
        if ($ex8 % $i == 0) {
            echo $i, ' ';
        }
    }

    echo '<hr/>';

    # 9. Given an integer, deliver a message to point out whether it is prime or not.

    echo '9. ';

    $ex9 = 7;

    for ($ex9v2 = 1; $ex9v2 < 7; $ex9v2++) {
        if ($ex9 % $ex9v2 == 0) {
            echo 'No es un número primo';
        }
    }


    echo '<hr/>';

    # 10. Deliver the first 20 terms of the Fibonacci Sequence. This sequence begins by 0 and 1, and the rest of the terms can be calculated adding the two preceding ones.

    echo '10. ';

    $ex10v1 = 1;
    $ex10v2 = 0;
    for ($ex10v3 = 0; $ex10v3 < 20; $ex10v3++) {
        $suma = $ex10v1 + $ex10v2;
        $ex10v1 = $ex10v2;
        $ex10v2 = $suma; 
    }

    echo $suma;

    ?>

    

</body>
</html>