<?php
    // Start the session
    session_start();
    $address = $_POST["address"];
    //$city = $_POST["city"];
    //$state = $_POST["state"];
    //$zip = $_POST["zip"];
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
            <p>
                <?php echo $address . " " . <br>
                 $city . ", " //. $state . " " . $zip ?>
            </p>
    </body>
</html>
