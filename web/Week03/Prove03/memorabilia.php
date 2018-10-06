<?php
    // Start the session
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sports Memorabilia</title>
        <link rel="stylesheet" type="text/css" href="memorabilia.css">
        <script type="text/javascript" src="memorabilia.js" onload="onload()"></script>
    </head>
    <body>
        <header>
            <img  src="BaseballLogo.png" alt="Baseball Logo">
            <img  src="NBALogo.png" alt="NBA Logo">
            <img  src="NFLLogo.png" alt="NFL Logo">
            <img  src="NHLLogo.png" alt="NHL Logo">
        </header>
        <?php include 'navBar.php';?>
        <div>
            <h1>Items to purchase at the store</h1>
            <form action="cart.php" method="POST">
                <table>
                    <tr>
                        <td id="item">
                            <h3>Michael Jordan Rookie Card</h3>
                            <div id="photo">
                                <img  src="mjRookieCard.jpg" alt="MJ Rookie Card">
                            </div>
                            <br>
                            <br>
                            <br>
                            <input type="checkbox" name="items[]" onclick="rookieCardCount()" value="MJ's Rookie Card $2,000">
                            Check the box and click "Submit" to add to your cart
                        </td>
                        <td id="item">
                            <h3>Signed Photo of Dwight Clark's "The Catch"</h3>
                            <div id="photo">
                                <img  src="dcTheCatch.jpg" alt="DC The Catch">
                            </div>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <input type="checkbox" name="items[]" onclick="theCatchCount()" value="DC's The Catch Photo $400">
                            Check the box and click "Submit" to add to your cart
                        </td>
                        <td id="item">
                            <h3>Curt Schilling's Bloody Sock</h3>
                            <div id="photo">
                                <img  src="csBloodySock.jpg" alt="CS Bloody Sock">
                            </div>
                            <br>
                            <input type="checkbox" name="items[]" onclick="bloodySockCount()" value="CS's Bloody Sock $50,000">
                            Check the box and click "Submit" to add to your cart
                        </td>
                    </tr>
                    <tr>
                        <td id="item">
                            <h3>Barry Bond's Asterisk Ball</h3>
                            <div id="photo">
                                <img  src="bbasteriskball.jpg" alt="BB Asterisk Ball">
                            </div>
                            <br>
                            <input type="checkbox" name="items[]" onclick="asteriskBallCount()" value="BB's Asterisk Ball $1,500,000">
                            Check the box and click "Submit" to add to your cart 
                        </td>
                        <td id="item">
                            <h3>Wayne Gretsky Game Worn Jersey</h3>
                            <div id="photo">
                                <img  src="wgJersey.jpg" alt="WG Jersey">
                            </div>
                            <br>
                            <input type="checkbox" name="items[]" onclick="wornJerseyCount()" value="WG's Jersey $300">
                            Check the box and click "Submit" to add to your cart 
                        </td>
                    </tr>
                </table>
                <!-- Total -->
                <div>
                    <p id="totalPrice">Total Price: </p>
                </div>
                <input type="submit" name="submit" value="Submit">
            </form>    
        </div>
        <?php include 'navBar.php';?>
    </body>    
            