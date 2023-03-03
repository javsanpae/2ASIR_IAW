<?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $base_datos = "bendetto";
    try {
        $conexion = new PDO("mysql:host=$servidor;dbname=$base_datos", $usuario, $clave);
        $consulta = "SELECT * FROM clientes ORDER BY Nombre";
        $resultado = $conexion->query($consulta);
        echo "<table><caption>Clientes</caption>";
        echo "<tr> <th>ID</th> <th>NOMBRE</th> <th>CONTACTO</th> <th>CARGO</th>
        <th>TELÉFONO</th> </tr>";
        $clientes = $resultado->fetchAll(PDO::FETCH_ASSOC);
        foreach ($clientes as $cliente){
            echo "<tr>";
            echo "<td>",$cliente['IdCliente'] , "</td>";
            echo "<td>",$cliente['Nombre'] , "</td>";
            echo "<td>",$cliente['Contacto'] , "</td>";
            echo "<td>",$cliente['Cargo'] , "</td>";
            echo "<td>",$cliente['Telefono'] , "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    catch (PDOException $exception){
        echo "Fallo de conexión", $exception->getmessage();
    }
    $conexion = null;
?>