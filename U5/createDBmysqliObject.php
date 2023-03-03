<?php
      $servidor = "localhost";
      $usuario = "root";
      $clave = "";

      $conexion =  new mysqli($servidor, $usuario, $clave);
      $consulta = "CREATE DATABASE `library2`";
      if ( $conexion->query($consulta) === TRUE) {
         echo "La base de datos se creó correctamente.";
      }
      else {
          echo "Error en la creación de la base de datos: ", $conexion->error;
      }  
?>