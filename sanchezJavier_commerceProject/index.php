<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      <?php require "./assets/css/style.css"; ?>
    </style>
    <title>JSCOMMERCE- Home</title>
</head>
<body>
    <div class="topnav">
        <a class="active" href="index.php">Home</a>
        <a href="services.php">Services</a>
        <a href="register.php">Register</a>
        <a href="login.php">Login</a>
        <?php 
            if (isset($_COOKIE['is_logged'])) {
                echo "<a class='welcome' href='user_info.php'>Welcome, {$_COOKIE['username']}!</a>";
            }
        ?>
    </div>

    <div class="index">

        <h1>Welcome to JS.COMMERCE!</h1>

        <p>We are a specialized technical service with two years of experience on hardware, software and networking.</p>

        
        <a href="system.php"><img src="./assets/images/repair.jpg" alt="repair"></a>
        <a href="network.php"><img src="./assets/images/networks.jpg" alt="networks"></a>

        <a href="software.php"><img src="./assets/images/software.jpg" alt="software"></a>

        
        

        <div class="whyus">
        <h2>Why us?</h2>
        <ul>
            <li>We are a young team.</li>
            <li>We try to give the best of ourselves.</li>
            <li>We look forward to be the first option for our clients.</li>
            <li>We know what our clients want and nothing else.</li>
            <li>We have the cheapest prices available on our zone.</li>
            <li>We plan on upgrade our services and make our name a trustable one.</li>
        </ul>
        </div>

        <div style="width: 100%"><iframe scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=es&amp;q=Calle%20Primavera,%2026,%20Granada,%20Espa%C3%B1a+(JS.COMMERCE)&amp;t=&amp;z=18&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="100%" height="600" frameborder="0"><a href="https://www.gps.ie/car-satnav-gps/">Sat Navs</a></iframe></div>            
    
    
        <div class="whyus">
            <h2>Contact us!</h2>
            <a href="mailto:javsanpae@gmail.com">javsanpae@gmail.com</a>
        </div>

        
    
    </div>


    <div class="footer">
        Copyright 2023 ©, Javier Sánchez, Web Applications Implementation.
    </div>
    </body>
</html>