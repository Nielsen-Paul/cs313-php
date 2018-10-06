<?php
    // Start the session
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Checkout</title>
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
        <h2>Please confirm your order and enter your address:</h2>
        <?php
        foreach($_SESSION["items"] as $item) {
            echo $item . "<br>" ; }
        ?><br>
        <form action="confirm.php" method="post">
            Address: <input type="text" name="address"><br>
            City: <input type="text" name="city"><br>
            State: <select name="state"><br>
            <option>AK</option>
            <option>AL</option>
            <option>AZ</option>
            <option>AR</option>
            <option>CA</option>
            <option>CO</option>
            <option>CT</option>
            <option>DE</option>
            <option>FL</option>
            <option>GA</option>
            <option>HI</option>
            <option>ID</option>
            <option>IL</option>
            <option>IN</option>
            <option>IA</option>
            <option>KS</option>
            <option>KY</option>
            <option>LA</option>
            <option>ME</option>
            <option>MD</option>
            <option>MA</option>
            <option>MI</option>
            <option>MN</option>
            <option>MS</option>
            <option>MO</option>
            <option>MT</option>
            <option>NE</option>
            <option>NV</option>
            <option>NH</option>
            <option>NJ</option>
            <option>NM</option>
            <option>NY</option>
            <option>NC</option>
            <option>ND</option>
            <option>OH</option>
            <option>OK</option>
            <option>OR</option>
            <option>PA</option>
            <option>RI</option>
            <option>SC</option>
            <option>SD</option>
            <option>TN</option>
            <option>TX</option>
            <option>UT</option>
            <option>VT</option>
            <option>VA</option>
            <option>WA</option>
            <option>WV</option>
            <option>WI</option>
            <option>WY</option>
            </select><br>
            Zip Code: <input type="text" name="zip">
            <br>
            <input type="submit" name="confirm" value="Purchase Order">
        </form>
        <form action="cart.php">
            <input type="submit" name="return" value="Return to Cart" action="cart.php">
        </form>
    <?php include 'navBar.php';?>
    </body>
</html>
