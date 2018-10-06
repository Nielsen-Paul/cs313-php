<?php
    // Start the session
    session_start();
    $_SESSION["items"] = $_POST["items"] 
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Shopping Cart</title>
        <link rel="stylesheet" type="text/css" href="memorabilia.css">
    </head>
    <body>
        <h2>You have selected the following items</h2>
        <?php
            foreach($_SESSION["items"] as $item) {
                echo $item . "<br>" ; }
        ?><br>
        <h3>Would you like to purchase these items now or continue shopping?</h3>
        <form action="checkout.php">
        <input type="submit" name="purchase" value="Proceed to Checkout" action="checkout.php">
        </form>
        <form action="memorabilia.php">
        <input type="submit" name="continue" value="Continue Shopping" action="memorabilia.php">
        </form>
    </body>
</html> 