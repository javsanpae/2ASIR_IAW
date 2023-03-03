<?php

    try {
        $server = "localhost";
        $db = "Biblioteca";
        $user = "root";
        $pass = "";

        $conn = new PDO("mysql:host=$server; dbname=$db", $user, $pass);
        $query = "SELECT * FROM Libros WHERE Editorial = ? ORDER BY Nombre";
        $result = $conn -> prepare($query);
        $result -> bindParam(1, $editorial);
        $editorial = "Planeta";
        $result -> execute();

        echo "<table><caption>Libros de la Editorial $editorial</caption>";
        while ($tupla = $result -> fetch()) {
            echo "<tr>";
            echo "<td>{$tupla['ISBN']}</td>";
            echo "<td>{$tupla['NOMBRE']}</td>";
            echo "<td>{$tupla['AUTOR']}</td>";
            echo "<td>{$tupla['PRECIO']}</td>";
            echo "<td>{$tupla['EditorialNombre']}</td>";
            echo "</tr>";
        }
        echo "</table>";
    } catch (PDOException $exception) {
        echo "Fallo nº {$exception -> getmessage()}";
    }


?>