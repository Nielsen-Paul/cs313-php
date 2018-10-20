<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />

    <!-- Page title -->
    <title>Requirements</title>
		<link rel="stylesheet" type="text/css" href="memorabilia.css">
</head>
<body>
	<?php include 'navBar.php';?>
	<h1>Duty to God Requirements</h1>
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

		$statement = $db->query('SELECT name, learn, act, share, comments, journal FROM requirements');?>
		<?php while ($row = $statement->fetch(PDO::FETCH_ASSOC)) ?>
		{
			echo '<strong>' . $row['name'] . ' - </strong>'; 
			<!--<input type="checkbox" name="learn" value="<?php //echo($row['learn']); ?>" />;
			<input type="checkbox" name="act" value="<?php //echo($row['act']); ?>" />;
			<input type="checkbox" name="share" value="<?php// echo($row['share']); ?>" />;

			echo '<input type="checkbox" name="learn" value="$row['learn']">' . ' ' .
			echo '<input type="checkbox" name="act" value="$row['act']">' . ''  . 
			echo '<input type="checkbox" name="share" value="$row['share']">' . '' . 
			echo '<input type="text" name="comment" value="$row['comment']">' . '<br/>';
		  echo '<input type="text" name="journal" value="$row['journal']">' . '<br/>'; -->
		}
		<?php endwhile; ?>
	<div class="footer">
		<?php include 'navBar.php';?>
	</div>
</body>
</html>