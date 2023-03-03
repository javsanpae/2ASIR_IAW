<?php
    $dsn = "mysql:host=localhost;dbname=bendetto";
    $usuario = "root";
    $clave = "";

    try {
        $conexion = new PDO($dsn,$usuario,$clave);
    } 
    catch (PDOException $exception){
        echo "Fallo de conexión ", $exception->getmessage();
    }
?>
