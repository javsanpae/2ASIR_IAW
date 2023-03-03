<?php

$conn = new PDO("mysql:host=localhost;dbname=bendetto", "root", "");
$query = "SELECT * FROM clientes WHERE Ciudad='{$_POST['dropdown']}'";
$result = $conn -> prepare($query);
$result -> execute();


echo "<h1>LIST OF ALL CLIENTS FROM {$_POST['dropdown']}</h1>";
echo 
"
<table>

    <tr>
        <th>Nombre</th>
        <th>Teléfono</th>
    </tr>
";
while ($data = $result -> fetch()) {
    echo 
    "
    <tr>
        <td>{$data['Nombre']}</td>
        <td>{$data['Ciudad']}</td>
    </tr>
    ";
}
?>