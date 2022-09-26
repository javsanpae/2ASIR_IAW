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
    $h = date('H');
    if($h >= 22) {
        echo 'Good Night!';
    }
    ?>

    <!--

    Date is a PHP integrated function which gives the current date.
    Inside of the (), you can put which specific info you want to take (H for hours, M for minutes, etc)
    What we are doing here is saving the hour into a variable called $h
    With the IF sentence the program is detecting wether the time is 22 or BIGGER (23 for example)
    If the variable value is bigger, then it is going to print 'Good Night!'
    I said BIGGER because, for example, if we are at 2am, the program won't work, as 2 is less than 22 and viceversa.


    -->

</body>
</html>