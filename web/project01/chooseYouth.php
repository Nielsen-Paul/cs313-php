<?php 
	$username = $_POST["username"];
?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />

    <!-- Page title -->
    <title>Choose a Youth</title>
		<link rel="stylesheet" type="text/css" href="project01.css">
</head>
<body>
	<?php include 'navBar.php';?>
	<h1>Choose a Youth</h1>
	<?php
		try
		{
		  $dbUrl = getenv('DATABASE_URL');

		  $dbOpts = parse_url($dbUrl);

		  $dbHost = $dbOpts["host"];
		  $dbPort = $dbOpts["port"];
		  $dbUser = $dbOpts["user"];
		  $dbPassword = $dbOpts["pass"];
		  $dbName = ltrim($dbOpts["path"],'/');

		  $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

		  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch (PDOException $ex)
		{
		  echo 'Error!: ' . $ex->getMessage();
		  die();
		}

		$statement = $db->query('SELECT name FROM youth');?>
		<?php while ($row = $statement->fetch(PDO::FETCH_ASSOC)):
			echo "<p><a href="requirements.php?youth_id=$id['id']'>$row['name']</a></p>"; ?>
			<br>
		<?php endwhile; ?>
	<br>
	<div class="footer">
		<?php include 'navBar.php';?>
	</div>
</body>
</html>