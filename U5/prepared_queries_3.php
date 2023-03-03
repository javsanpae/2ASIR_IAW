<?php
      $servidor = "localhost";
      $usuario = "root";
      $clave = "";
      $dbname = "bendetto";

      try {
    $conexion =  new PDO("mysql:host=$servidor;dbname=$dbname", $usuario, $clave);
    $consulta = "INSERT INTO clientes (IdCliente, Nombre, Contacto, Cargo,Ciudad, Pais, Telefono) VALUES (:IdCliente,:Nombre,:Contacto,:Cargo,:Ciudad,:Pais,:Telefono);";
    $resultado = $conexion->prepare($consulta);
        
    $IdCliente = 'TOSER';
    $Nombre = 'Toledo Servant';
    $Contacto = 'Juan Toledo';
    $Cargo = 'Comercial';
    $Ciudad = 'Segovia';
    $Pais = 'España';
    $Telefono = '678321452';
    $resultado->execute(array(':IdCliente' => $IdCliente, ':Nombre' => $Nombre, ':Contacto' => $Contacto, ':Cargo' => $Cargo,':Ciudad' => $Ciudad, ':Pais' => $Pais, ':Telefono' => $Telefono));
    
    $IdCliente = 'REGAR';
    $Nombre = 'Repiso García';
    $Contacto = 'María Repiso';
    $Cargo = 'Comercial';
    $Ciudad = 'Cuenca';
    $Pais = 'España';
    $Telefono = '645159782';
  $resultado->execute(array(':IdCliente' => $IdCliente, ':Nombre' => $Nombre, ':Contacto' => $Contacto, ':Cargo' => $Cargo,':Ciudad' => $Ciudad, ':Pais' => $Pais, ':Telefono' => $Telefono));
}
catch (PDOException $exception){
    echo "Fallo de conexión", $exception->getmessage();
}  
?>
