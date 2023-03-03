<?php

    $srv = "localhost";
    $db = "bendetto";
    $user = "root";
    $pass = "";

    $conn = new PDO("mysql:host=$srv;dbname=$db", $user, $pass);
    $query = "SELECT * FROM productos ORDER BY Nombre";
    $result = $conn -> query($query);

    echo "<ul>";
    foreach($result -> fetchAll(PDO::FETCH_COLUMN,1) as $product) {
    echo "<li>{$product}</li>";
    }
    echo "</ul>";



?>