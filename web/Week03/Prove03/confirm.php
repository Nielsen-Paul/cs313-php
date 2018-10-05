<?php
    // Start the session
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Confirmation Page</title>
    </head>
    <body>
        <h2>The following items have been purchased: </h2>
        <?php
        foreach($_SESSION["items"] as $item) {
            echo $item . "<br>" ; }
        ?><br>
        <h2>They will be sent to the following address: </h2>
        
    </body>
</html>
