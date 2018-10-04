<!DOCTYPE html>
<html>
    <head>
        <title>Sports Memorabilia</title>
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
                        <td>
                            <h3>Michael Jordan Rookie Card</h3>
                            <img  src="mjRookieCard.jpg" alt="MJ Rookie Card">
                            <br>
                            <input type="checkbox" name="items[]" value="mjRookieCard">
                        </td>
                        <td>
                            <h3>Signed Photo of Dwight Clark's "The Catch"</h3>
                            <img  src="dcTheCatch.jpg" alt="DC The Catch">
                            <br>
                            <input type="checkbox" name="items[]" value="dcTheCatch">
                        </td>
                        <td>
                            <h3>Curt Schilling's Bloody Sock</h3>
                            <img  src="csBloodySock.jpg" alt="CS Bloody Sock">
                            <br>
                            <input type="checkbox" name="items[]" value="csBloodySock">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3>Barry Bond's Asterisk Ball</h3>
                            <img  src="bbasteriskball.jpg" alt="BB Asterisk Ball">
                            <br>
                            <input type="checkbox" name="items[]" value="bbasteriskball"> 
                        </td>
                        <td>
                            <h3>Wayne Gretsky Game Worn Jersey</h3>
                            <img  src="wgJersey.jpg" alt="WG Jersey">
                            <br>
                            <input type="checkbox" name="items[]" value="wgJersey"> 
                        </td>
                    </tr>
                </table>
                <input type="submit" name="submit" value="Submit">
            </form>    
        </div>
    </body>    
            