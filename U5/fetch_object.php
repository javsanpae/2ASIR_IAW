<?php

class Cliente{
    public $IdCliente;
    public $Nombre;
    public $Contacto;
    public $Cargo;
    public $Ciudad;
    public $Pais;
    public $Telefono;
}

    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $base_datos = "bendetto";

    try {
        $conn =  new PDO("mysql:host=$servidor;dbname=$base_datos", $usuario, $clave);
        $query = "SELECT * FROM clientes WHERE Ciudad=? ORDER BY Nombre;";
        $result = $conn -> prepare($query);
        $result -> bindParam(1, $param);
        $param = 'Londres';
        $result -> execute();
        echo 
        "
        <table>
        <caption>Clientes en {$param}</caption>
        <tr>
            <th>Nombre</th>
            <th>Telefono</th>
        </tr>
        ";
         while ($cliente = $result -> fetchObject('Cliente')) {
            echo 
            "
            <tr>
                <td>{$cliente -> Nombre}</td>
                <td>{$cliente -> Telefono}</td>
            </tr>
            ";
        } 
        echo "</table>"; 
    }
    catch (PDOException $exception){
        echo "Fallo de conexión", $exception->getmessage();
    }
    $conn =  null;
?>
