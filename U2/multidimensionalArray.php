<?php

/*
    $temperaturas = array(

        array(1,12,26),
        array(2,11,24),
        array(3,15,24)

    );
    $t_max = -1000; // se le pone un valor desorbitado para que no tenga posibles fallos
    $dia = 0;

    for ($fila = 0; $fila < 3; $fila++) {

        if ($temperaturas[$fila][2] < $t_max) {
            $t_max = $temperaturas[$fila][2];
            $dia = $temperaturas[$fila][0];
        }

    }

*/


/*                                  
    $temperaturas = array (
    array(1,12,26),
    array(2,11,24),
    array(3,15,24)
    );
    echo "<table><caption>Tabla de temperaturas</caption>"; 
    echo "<tr><th>Día</th><th>Mínima</th><th>Máxima</th></tr>";
    for ($dia = 0; $dia < 3; $dia++) {
    echo "<tr>";
    for ($col = 0; $col < 3; $col++) {
    echo "<td>", $temperaturas[$dia][$col]."</td>";
    }
    echo "</tr>";
    }
    echo "</table>";

*/


    $peliculas = array(
        "Spiderman" => array("4pm" => 300, "6pm" => 200, "8pm" => 500),
        "Tarzan" => array("4pm" => 200, "6pm" => 500, "8pm" => 400),
        "Mulan" => array("4pm" => 300, "6pm" => 400 , "8pm" => 500),
        "Dumbo" => array("4pm" => 100, "6pm" => 300, "8pm" => 200)
    );

    echo "<table><tr><th>Titulo</th><th>4pm</th><th>6pm</th><th>8pm</th></tr>";
    foreach ($peliculas as $titulos => $vistas) {
        echo "<tr>";
        echo "<td>", $titulos, "</td>";
        foreach($vistas as $hora => $numeroVistas) {
            echo "<td>", $peliculas[$titulos][$hora], "</td>";
        }
        
    } 
    echo  "</table>";












?>
