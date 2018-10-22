<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />

    <!-- Page title -->
    <title>Duty to God Login</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    <?php include 'navBar.php';?>
	<div id="login">
	    <h1>Please Log In</h1>
        <form action="requirements.php" method="get">
            <span>Username<input type="text" name="username" value=""></span><br>
            <span>Password<input type="text" name="password" value=""></span><br>
            <input type="submit">
        </form>
    </div>  
    <div class="footer">
		<?php include 'navBar.php';?>
	</div>
</body>
</html>