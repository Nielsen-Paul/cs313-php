<!DOCTYPE html>
<html>
    <head>
        <title>Shopping Cart</title>
    </head>
    <body>
        <h2>You have selected the following items</h2>
        <?php
            foreach($_POST["items"] as $item) {
                echo $item . "<br>" ; } ?><br>
        <h3>Would you like to purchase these items now or continue to shop?</h3>
        <input type="submit" name="purchase" value="Purchase Order">
        <input type="submit" name="continue" value="Continue Shopping">
    </body>
</html> 