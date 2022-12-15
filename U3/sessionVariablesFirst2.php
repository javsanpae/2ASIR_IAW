<?php
   session_start();
?>
<!DOCTYPE html>
<html lang=”es”>
   <body>
      <?php
         $_SESSION["usuario"] = "123456";
         $_SESSION["rol"] = "cliente";
         var_dump($_SESSION['rol']);
      ?>
   </body>
</html>
