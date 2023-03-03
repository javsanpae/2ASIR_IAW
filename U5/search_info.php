<?php

    $conn = new PDO("mysql:localhost,dbname:biblioteca,root,''");
    $query = "SELECT * FROM LECTORES WHERE DNI=?";

    $result = $conn -> prepare($query);
    $result -> bindParam(1, "78945632D");

    $result -> execute();

    echo "<table>";
    while ($tuple = $result -> execute()) {
        echo "<tr><td>{$tuple['id']}</td>";
    }

?>