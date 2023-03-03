<?php

    $srv = "mysql:host=localhost";
    $usr = "root";
    $pass = "";

    try {

        $conn = new PDO($srv, $usr, $pass);

        $createDB = "CREATE DATABASE IF NOT EXISTS Biblioteca";
        $createLibros = "CREATE TABLE IF NOT EXISTS Libros (ISBN VARCHAR(13) PRIMARY KEY, NOMBRE VARCHAR(40), AUTOR VARCHAR(40), PRECIO INT)";
        $createLectores = "CREATE TABLE IF NOT EXISTS Lectores (ID VARCHAR(9) PRIMARY KEY, NOMBRE VARCHAR(40), CIUDAD VARCHAR(40))";
        $createPrestamos = "CREATE TABLE IF NOT EXISTS Prestamos (ISBN VARCHAR(13) REFERENCES Libros (ISBN), ID VARCHAR(9) REFERENCES Lectores (ID), FECHA DATE, PRIMARY KEY (ISBN, ID, FECHA))";

        $insertLibros = "INSERT INTO Libros(ISBN, NOMBRE, AUTOR, PRECIO) VALUES('837672940782W', 'Los Viajes de Gulliver', 'Jonathan Swift', 15)";
        $insertLectores = "INSERT INTO Lectores (ID, NOMBRE, CIUDAD) VALUES ('34812674G', 'Victoria Olmedo', 'Antequera')";
        $insertPrestamos = "INSERT INTO Prestamos (ISBN, ID, FECHA) VALUES ('837672940782W', '34812674G', '2013-12-26')";

        $conn -> query($createDB);
        $conn -> query('USE Biblioteca');
        $conn -> query($createLibros);
        $conn -> query($createLectores);
        $conn -> query($createPrestamos);
        $conn -> query($insertLibros);
        $conn -> query($insertLectores);
        $conn -> query($insertPrestamos);

        echo "Datos introducidos correctamente. Para hacer la comprobación, ve a <a href='http://127.0.0.1/phpmyadmin'>tu SGBD favorito</a>";
        
    } catch (PDOException $e) {
        echo "Se ha producido un error: <strong>{$e -> getMessage()}</strong>";
    }

    $conn = null;

?>