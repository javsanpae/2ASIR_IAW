<?php
      $servidor = "localhost";
      $usuario = "root";
      $clave = "";
      $dbname = "Biblioteca";

      try {
 $conexion =  new PDO("mysql:host=$servidor;dbname=$dbname", $usuario, $clave);
   $consulta = "INSERT INTO Libros (ISBN,Título,Autor,Editorial,Signatura) VALUES (?,?,?,?,?);";
    $resultado = $conexion->prepare($consulta);
    
    $resultado->bindParam(1, $isbn);
    $resultado->bindParam(2, $titulo);
    $resultado->bindParam(3, $autor);
    $resultado->bindParam(4, $editorial);
    $resultado->bindParam(5, $signatura);
    
    $isbn = '8467044810';
    $titulo = 'Don Quijote de la Mancha';
    $autor = 'Miguel de Cervantes Saavedra';
    $editorial = 'Austral';
    $signatura = '123456';
    $resultado->execute();
    
    $isbn = '978-8437607009';
    $titulo = 'La Celestina';
    $autor = 'Fernando de Rojas';
    $editorial = 'Cátedra';
    $signatura = '156234234';
    $resultado->execute();
    }
   catch (PDOException $exception){ 
       echo "Fallo de conexión", $exception->getmessage();
   }  
?>
