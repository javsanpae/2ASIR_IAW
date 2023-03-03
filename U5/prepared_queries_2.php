<?php
      $servidor = "localhost";
      $usuario = "root";
      $clave = "";
      $dbname = "bendetto";

      try {
    $conexion =  new PDO("mysql:host=$servername;dbname=$dbname", $usuario, $clave);
    $consulta = "INSERT INTO clientes (IdCliente, Nombre, Contacto, Cargo,Ciudad, Pais, Telefono) VALUES (:IdCliente,:Nombre,:Contacto,:Cargo,:Ciudad,:Pais,:Telefono);";
    $resultado = $conexion->prepare($consulta);
    
    $resultado->bindParam(':IdCliente', $IdCliente);
    $resultado->bindParam(':Nombre', $Nombre);
    $resultado->bindParam(':Contacto', $Contacto);
    $resultado->bindParam(':Cargo', $Cargo);
    $resultado->bindParam(':Ciudad', $Ciudad);
    $resultado->bindParam(':Pais', $Pais);
    $resultado->bindParam(':Telefono', $Telefono);
    
    $IdCliente = 'PERCAL';
    $Nombre = 'Pérez Calero';
    $Contacto = 'Antonio Pérez';
    $Cargo = 'Comercial';
    $Ciudad = 'Granada';
    $Pais = 'España';
    $Telefono = '632147852';
    $resultado->execute();
    
    $IdCliente = 'RONCAR';
    $Nombre = 'Roncero Carmona';
    $Contacto = 'Jesús Roncero';
    $Cargo = 'Comercial';
    $Ciudad = 'Sevilla';
    $Pais = 'España';
    $Telefono = '615945782';
    $resultado->execute();
}
catch (PDOException $exception){
    echo "Fallo de conexión", $exception->getmessage();
}  
?>
