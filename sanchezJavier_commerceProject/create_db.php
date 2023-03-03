<?php
/*
Please, run this document first!!!
This is the first step you have to take in order
to create the database, tables and all the basic
functionality in order to make the rest of the web
page work.
*/

$srv = "localhost";
$db = "jscommerce";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$srv", $user, $pass);

try {
    
    # We'll use "IF NOT EXISTS" and "IGNORE" keywords to avoid fatal errors if you are running this for the second time. 

    # CREATING DATABASE
    $query = "CREATE DATABASE IF NOT EXISTS $db; USE $db";
    $conn -> exec($query);

    # CREATING TABLE ECOMMERCE
    $query = "CREATE TABLE IF NOT EXISTS ECOMMERCE (
        id VARCHAR(9) PRIMARY KEY,
        name VARCHAR(50),
        address VARCHAR(100)
        )";
    $conn -> exec($query);

    # CREATING TABLE USERS
    $query = "CREATE TABLE IF NOT EXISTS USERS (
        id VARCHAR(9) PRIMARY KEY,
        username VARCHAR(40),
        password VARCHAR(50), # yeah, i know, im saving the password as plain text, i deserve the worst
        name VARCHAR(50),
        address VARCHAR(100),
        email VARCHAR(70)
        )";
    $conn -> exec($query);

    // CREATING TABLE SERVICES
    $query = "CREATE TABLE IF NOT EXISTS SERVICES (
        id VARCHAR(10) PRIMARY KEY,
        name VARCHAR(50),
        price DECIMAL(5,2),
        department VARCHAR(40),
        description VARCHAR(200)
        )";
    $conn -> exec($query);

    // CREATING RELATION Orders
    $query = "CREATE TABLE IF NOT EXISTS Orders (
        order_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
        service_id VARCHAR(10),
        order_date DATE,
        user_id VARCHAR(9),
        comments VARCHAR(200),
        FOREIGN KEY (service_id) REFERENCES SERVICES (id),
        FOREIGN KEY (user_id) REFERENCES USERS (id) 
        )";
    $conn -> exec($query);

    # Here we are inserting the values of the E-commerce.
    $query = "INSERT IGNORE INTO ECOMMERCE (address, name, id) VALUES ('Malaga Rd', 'jscommerce', '23654678S')";
    $conn -> exec($query);

    # We'll create an user called "admin". We'll manage the web page with this user. The credentials are "admin:admin".
    $query = "INSERT IGNORE INTO USERS (id, username, password, name, address, email) VALUES ('admin', 'admin', 'admin', 'admin', 'admin', 'admin@jscommerce.com')";
    $conn -> exec($query);

    # And now we'll create some services. We can also create them preparing and binding the values, but I prefer this way as it's easier.
    $query = "INSERT IGNORE INTO SERVICES (id, name, price, department, description) VALUES ('SYS-0000', 'REPAIR YOUR COMPUTER', 49.90, 'SYSTEM', 'We will check the possible errors on your computer and try to repair them. Consider this is the base price.')";
    $conn -> exec($query);
    $query = "INSERT IGNORE INTO SERVICES(id, name, price, department, description) VALUES('SYS-0001', 'BUILD YOUR NEW PC', 29.90, 'SYSTEM', 'Have you made your perfect specs PC but you dont know how to build it? Dont worry! We will help you with all the process.');";
    $conn -> exec($query);
    $query = "INSERT IGNORE INTO SERVICES(id, name, price, department, description) VALUES('SYS-0002', 'UPGRADE COMPONENTS', 19.90, 'SYSTEM', 'This is the base price. In case you want to upgrade any component with one-year warranty, you can count on us.');";
    $conn -> exec($query);
    $query = "INSERT IGNORE INTO SERVICES(id, name, price, department, description) VALUES('NET-0000', 'NETWORK MANAGEMENT', 79.90, 'NETWORK', 'Do you want to build a scalable yet manageable network for your company? We will adjust to your needs and make the best solution possible.');";
    $conn -> exec($query);
    $query = "INSERT IGNORE INTO SERVICES(id, name, price, department, description) VALUES('NET-0001', 'UPGRADING YOUR ROUTER', 69.90, 'NETWORK', 'Do you need a better router to get better performance on your network? This price includes a Tenda AC10U router.');";
    $conn -> exec($query);
    $query = "INSERT IGNORE INTO SERVICES(id, name, price, department, description) VALUES('SOF-0000', 'INSTALL AN OPERATING SYSTEM', 19.90, 'SOFTWARE', 'Do you want to repair possible soft errors of your computer and give it a second life? Then we suggest formating it.');";
    $conn -> exec($query);
    $query = "INSERT IGNORE INTO SERVICES(id, name, price, department, description) VALUES('SOF-0001', 'INSTALL AN OFFICE SUITE', 59.90, 'SOFTWARE', 'Do you need an office suite on your computer? With this service we will include Office 2010.');";
    $conn -> exec($query);
    $query = "INSERT IGNORE INTO SERVICES(id, name, price, department, description) VALUES('SOF-0002', 'INSTALL DRIVERS', 9.90, 'SOFTWARE', 'This service is already included if you asked for installing an OS.');";
    $conn -> exec($query);
    $query = "INSERT IGNORE INTO SERVICES(id, name, price, department, description) VALUES('SOF-0003', 'UPGRADING WINDOWS VERSION', 19.90, 'SOFTWARE', 'Do you want to have the latest Windows version safely? With this service you will not lose any data in case it is not available.');";
    $conn -> exec($query);

    echo "<h1>The database and its basic structure has been created. Its name is 'jscommerce'.</h1>";
    echo "<p>Now you can safely go to <a href='index.php'>index</a>.";

}
catch (PDOException $err) {
    echo $err;
}




?>