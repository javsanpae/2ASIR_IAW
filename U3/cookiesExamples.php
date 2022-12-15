<!DOCTYPE html>
   <?php
      $nombre_cookie = "usuario";
      $valor_cookie = "María López Gómez";
      setcookie($nombre_cookie, $valor_cookie, time() + 86400 * 30, "/"); 
      $vcookie = 'Qpf5n';
      $v2cookie = 'nuevaCookie';
      setcookie($v2cookie, $vcookie, time() + 86400 * 30, "/");
   ?>
<html>
   <head>
      <title>Cookies</title>
   </head>
   <body>
      <?php
         if(!isset($_COOKIE[$nombre_cookie])) {
           echo "La cookie " . $nombre_cookie . " no se ha establecido aún!";
         } 
        else {
           echo "El valor de la cookie " . $nombre_cookie . " es: " . $_COOKIE[$nombre_cookie];
        }

        var_dump($_COOKIE);

        ?>
</body>
</html>
