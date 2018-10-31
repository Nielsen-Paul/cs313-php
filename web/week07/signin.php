<?php include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $query = 'INSERT INTO public."user" (name, password) VALUES (:name, :password)';
    $stmt = $db->prepare($query);
    $pdo = $stmt->execute(array(':name' => $_POST['name'], ':password' => $_POST['password']));

}

?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />

        <!-- Page title -->
        <title>Database Sign In</title>
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>
    <body>
        <div id="signup"><a href="signup.php">Create an account</a></div>
        <div id="login">
	        <h1>Please sign in</h1>
            <form action="welcome.php" method="get">
                <span>Username<input type="text" name="username" value=""></span><br>
                <span>Password<input type="password" name="password" value=""></span><br>
                <input type="submit">
            </form>
        </div>
    </body>
</html>