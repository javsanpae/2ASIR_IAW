<?php
# THIS IS THE DATABASE CONNECTOR FILE. YOU CAN CHANGE THE NAME OF THE DATABASE AND EVERYTHING YOU WANT FROM THIS DOCUMENT.
$srv = "localhost";
$db = "jscommerce";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$srv;dbname=$db", $user, $pass);
?>