<?php
    // Start the session
    session_start();
    $address = $city = $state = $zip = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $address = test_input($_POST["address"]);
  $city = test_input($_POST["city"]);
  $state = test_input($_POST["state"]);
  $zip = test_input($_POST["zip"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$_SESSION["address"] = $address;
$_SESSION["city"] = $city;
$_SESSION["state"] = $state;
$_SESSION["zip"] = $zip;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Confirmation Page</title>
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
        <h2>The following items have been purchased: </h2>
        <?php
        foreach($_SESSION["items"] as $item) {
            echo $item . "<br>" ; }
        ?><br>
        <h2>They will be sent to the following address: </h2>
            <p>
                <?php echo nl2br($address . "\n" . $city . ", " . $state . " " . $zip) ?>
            </p>
        <?php include 'navBar.php';?>    
    </body>
</html>
