<?php
    // Start the session
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Checkout</title>
    </head>
    <body>
        <h2>Please confirm your order</h2>
        <?php
        foreach($_SESSION["items"] as $item) {
            echo $item . "<br>" ; }
        ?><br>
        <form action="confirm.php">
        <input type="submit" name="confirm" value="Purchase Order">
        </form>
        <form action="cart.php">
        <input type="submit" name="return" value="Return to Cart" action="cart.php">
        </form>
    </body>
</html>
