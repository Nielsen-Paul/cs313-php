<?php
    // Start the session
    session_start();
    $_SESSION["items"] = $_POST["items"]; 
    $totalPrice = $_POST["totalPrice"];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Shopping Cart</title>
        <link rel="stylesheet" type="text/css" href="memorabilia.css">
    </head>
    <body>
        <header>
            <img  src="BaseballLogo.png" alt="Baseball Logo">
            <img  src="NBALogo.png" alt="NBA Logo">
            <img  src="NFLLogo.png" alt="NFL Logo">
            <img  src="NHLLogo.png" alt="NHL Logo">
        </header>
        <?php include 'navBar.php';?>        
        <h2>You have selected the following items</h2>
        <?php
            foreach($_SESSION["items"] as $item) {
                echo $item . "<br>" ; }
            echo "Total Price: " . $totalPrice;    
        ?><br>
        <h3>Would you like to purchase these items now or continue shopping?</h3>
        <form action="checkout.php">
        <input type="submit" name="purchase" value="Proceed to Checkout" action="checkout.php">
        </form>
        <form action="memorabilia.php">
        <input type="submit" name="continue" value="Continue Shopping" action="memorabilia.php">
        </form>
    <?php include 'navBar.php';?>
    </body>
</html> 