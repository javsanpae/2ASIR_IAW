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
    A cinema recorded the audience of the ten films it showed 
    last Saturday. Write a script to deliver messages pointing 
    out if the number of spectators in eache film was less than
    30, between 30 and 250 or greater than 250.
    */

    $moviesSunday = array("The Lord of the Rings" => 300, "Interstellar" => 150, "Saw" => 20);

    foreach($moviesSunday as $movie => $spectators) {
        if ($spectators >= 30 AND $spectators <= 250) {
            echo '<p>The number of spectators of the movie ', $movie, ' was between 30 and 250.</p>';
        } elseif ($spectators < 30) {
            echo '<p>The number of spectators of the movie ', $movie, ' was under 30.</p>';
        } else {
            echo '<p>The number of spectators of the movie ', $movie, ' was over 250.</p>';
        }
    }


    ?>

</body>
</html>