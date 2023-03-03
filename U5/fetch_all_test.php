<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        table, tr, th, td {
            border: 1px solid black;
        }

    </style>
</head>
<body>
    <?php
    
    $srv = "localhost";
    $db = "Biblioteca";
    $user = "root";
    $pass = "";

    try {  
        $conn = new PDO("mysql:host=$srv;dbname=$db", $user, $pass);
        $query = "SELECT * FROM Libros ORDER BY nombre;";
        $result = $conn -> query($query);
        $books = $result -> fetchAll(PDO::FETCH_ASSOC);

        echo 
        "
        <table>
            <tr>
                <th>NOMBRE</th>
                <th>AUTOR</th>
            </tr>
        ";
        foreach ($books as $book) {
            echo 
            "
            <tr>
                <td>{$book['NOMBRE']}</td>
                <td>{$book['AUTOR']}</td>
            </tr>
            ";
        }
        echo 
        "
        </table>
        ";
    }
    catch (PDOException $err) {
        echo $err;
    }


    ?>
</body>
</html>