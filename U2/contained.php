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
    
    $value1 = "Lorem ipsum dolor sit eget amet, consectetur adipiscing elit. Nullam at diam ac nunc lacinia lacinia eget sit amet sapien. Duis. Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.eget";
    
    $value2 = 'eget';

    $total = 0;

    for ($i = 0; ($i < strlen($value1) - strlen($value2) + 1); $i++) {
        if (substr($value1, $i, strlen($value2)) == $value2) {
            $total = $total + 1;
        }
    }
    
    echo 'The word ', "'", $value2, "'", ' is contained into the first value for ', $total, ' times.';    
    
    ?>
</body>
</html>