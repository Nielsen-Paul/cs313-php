<?php include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $hashpassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $query = 'INSERT INTO public."user" (name, password) VALUES (:name, :password)';
    $stmt = $db->prepare($query);
    $pdo = $stmt->execute(array(':name' => $_POST['name'], ':password' => $_POST['password']));

    $newURL = "./signin.php";
    header('Location: ' . $newURL);
}

?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />

        <!-- Page title -->
        <title>Database Signup</title>
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>
    <body>
        <div id="login">
	        <h1>Create an Account</h1>
            <form action="signup.php" method="POST">
                <span>Username<input type="text" name="name" value=""></span><br>
                <span>Password<input type="password" name="password" value=""></span><br>
                <input type="submit">
            </form>
        </div>
    </body>
</html>