<!DOCTYPE html>
<html>
    <head>
        <title>myFile03</title>
    </head>
    <body>
        <span>Name <?php echo $_POST["name"]; ?></span><br>
        <span>Email <?php echo $_POST["email"]; ?></span><br>
        Major <?php echo $_POST["majors"]; ?><br>
        <?php echo $_POST["comment"]; ?><br>
        <?php
            foreach($_POST["continents"] as $continent) {
                echo $continent; } ?><br>
    </body>
</html>    