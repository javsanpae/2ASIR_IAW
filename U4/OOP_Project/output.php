<?php
    require "invoiceClass.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>INVOICE</title>
</head>
<body>
    <?php
        
    $client = new invoice($_POST["name"], $_POST["nif"], $_POST["addr"], $_POST["invNum"], $_POST["invDate"], $_POST["serv"], $_POST["priceNOIVA"]);

    $iva = $client -> givePriceNoIVA() * ($plumbing -> giveIncr()/100);
    $totalPrice = $client -> givePriceNoIVA() + $iva;

    echo "<h1>COMMERCIAL INVOICE:</h1>";

    echo "<img src='assets/plumbing.jpg'/>";
    echo "<p class='from'>Plumbing {$plumbing -> giveName()}, NIF {$plumbing -> giveNIF()}, {$plumbing -> giveAddr()}, {$plumbing -> giveIncr()}% increase</p>";

    echo "<p class='to'>Bill to {$client -> giveName()}, {$client -> giveNIF()}, {$client -> giveAddr()}</p>";
    echo "<p>Total: {$totalPrice}</p>";
    echo 
    "<div class='table'>
        <table>
            <caption>Invoice nº{$client -> giveInvNum()}, {$client -> giveInvDate()}</caption>
            <tr>
                <th>#</th>
                <th>Item & Description</th>
                <th>Price (no IVA)</th>
            </tr>
            <tr>
                <td class='item'>1</td>
                <td class='item'>{$client -> giveServ()}</td>
                <td class='item'>{$client -> givePriceNoIVA()}</td>
            </tr>
            <tr class='calcs'>
                <td colspan='2'>Sub Total</td>
                <td>{$client -> givePriceNoIVA()}</td>
            </tr>
            <tr class='calcs'>
                <td colspan='2'>Sales Tax ({$plumbing -> giveIncr()}%)</td>
                <td>{$iva}</td>
            </tr>
            <tr class='calcs'>
                <td colspan='2'>Shipping Costs</td>
                <td>N/A</td>
            </tr>
            <tr class='calcs'>
                <td colspan='2'>Total</td>
                <td>{$totalPrice}</td>
            </tr>
        </table>
    </div>";

    ?>
</body>
</html>