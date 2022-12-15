<?php

$entrega = $_POST['entrega'];
$tamano = $_POST['tamaño'];
$ingredientes = $_POST['contenido'];

# Precio por envio.
$precioEnvio = array('envioDomicilio' => 2, 
                    'recogerLocal' => 0);
# Fin precio por envio.

# Precio por tamaño.
$precioTamano = array('pequeño' => 1, 
                    'mediano' => 2.5,
                    'grande' => 3,
                    'enorme' =>4.5);
# Fin precio por tamaño.

# Precio por ingrediente.
$precioIngre = array('anchoas' => 14,
                    'calamares' => 2,
                    'mejillones' => 1.25,
                    'jamon' => 2,
                    'york' => 0.5,
                    'queso' => 0.5,
                    'atun' => 1,
                    'tortilla' => 1.5);
# Fin precio por ingrediente.

$precioIngredientes = 0;
for ($i=0; $i < count($ingredientes); $i++) { 
    $ing = $ingredientes[$i];
    $precioIngredientes += $precioIngre[$ing];
}

$precio = $precioEnvio[$entrega] + $precioTamano[$tamano] + $precioIngredientes;

echo 'El bocadillo de tamaño ',$tamano,', con ';
for ($i=0; $i < count($ingredientes) ; $i++) { 
    echo $ingredientes[$i];
    echo ', ';
}
echo ' se ';
if ($entrega == 'envioDomicilio'){
    echo 'enviará a domicilio';
}
else {
    echo 'recogerá en el local';
}
echo ' y tiene un valor de ',$precio, '€';

?>