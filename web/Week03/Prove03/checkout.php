<?php

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Checkout</title>
    </head>
    <body>
        <h2>Please confirm your order</h2>
        <?php
        foreach($_POST["items"] as $item) {
                echo $item . "<br>" ; } ?><br>
        <input type="submit" name="confirm" value="Purchase Order" action="confirm.php">
        <input type="submit" name="return" value="Return to Cart" action="cart.php">
    </body>
</html>
