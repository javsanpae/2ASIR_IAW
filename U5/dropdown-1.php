<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="dropdown-1-1.php" method="post">

    <select name="dropdown" id="dropdown">
        <?php
        $conn = new PDO("mysql:host=localhost;dbname=bendetto", "root", "");
        $query = "SELECT DISTINCT Ciudad FROM clientes ORDER BY Ciudad ASC";
        $result = $conn -> prepare($query);
        $result -> execute();

        while ($city = $result -> fetch()) {
            echo "<option value={$city['Ciudad']}>{$city['Ciudad']}</option>";
        }

        ?>
    </select>

    <input type="submit" value="Send">

    </form>
</body>
</html>