<?php
      $servidor = "localhost";
      $usuario = "root";
      $clave = "";
      $dbname = "bendetto";

      try {
      $conexion =  new PDO("mysql:host=$servidor;dbname=$dbname", $usuario, $clave);
         $consulta = "SELECT * FROM clientes WHERE Ciudad = ? ORDER BY Nombre";
         $resultado = $conexion->prepare($consulta);
         $resultado->bindParam(1,$ciudad);
         $ciudad = "Londres";
    		    $resultado->execute();
         echo "<table><caption>Clientes en $ciudad</caption>";
  echo "<tr> <th>ID</th> <th>NOMBRE</th> <th>CONTACTO</th> <th>CARGO</th> <th>TELÉFONO</th> </tr>";
        $tupla = $resultado -> fetch(PDO::FETCH_BOTH);
        var_dump($tupla);
        while ($tupla = $resultado->fetch()){
           echo "<tr>";
           echo "<td>",$tupla['IdCliente'] , "</td>"; 
           echo "<td>",$tupla['Nombre'] , "</td>";
           echo "<td>",$tupla['Contacto'] , "</td>"; 
           echo "<td>",$tupla['Cargo'] , "</td>";
           echo "<td>",$tupla['Telefono'] , "</td>";
           echo "</tr>";
       }

       echo "</table>";
   }
    catch (PDOException $exception){
      echo "Fallo de conexión", $exception->getmessage();
    }  
    ?>
