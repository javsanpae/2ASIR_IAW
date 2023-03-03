<?php
      $servidor = "localhost";
      $usuario = "root";
      $clave = "";

      try {
          $conexion =  new PDO("mysql:host=$servidor", $usuario, $clave);
          $consulta = "CREATE DATABASE `library`";
          $resultado = $conexion->query($consulta);
      }
      catch (PDOException $exception){
          echo "Fallo de conexión ", $exception->getmessage();
      }  
?>