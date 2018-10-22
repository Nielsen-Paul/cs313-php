<?php 
	$username = $_POST["username"];
?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />

    <!-- Page title -->
    <title>Requirements</title>
		<link rel="stylesheet" type="text/css" href="project01.css">
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
		<form action="received.php" method="get">
			<?php while ($row = $statement->fetch(PDO::FETCH_ASSOC)): ?>
				<?php echo '<strong>' . $row['name'] . ' - </strong>'; ?>
				<label> Learn - </label><input type="checkbox" name="learn" value="<?php echo($row['learn']); ?>" />
				<label> Act - </label><input type="checkbox" name="act" value="<?php echo($row['act']); ?>" />
				<label> Share - </label><input type="checkbox" name="share" value="<?php echo($row['share']); ?>" />
				<label> Comment - </label><input id="comment" type="text" name="comment" value=" " /><?php echo($row['comment']); ?><br>
				<label> Journal - </label><input id="journal" type="text" name="journal" value=" " /><br>
				<?php echo($row['journal']); ?><br>
			<?php endwhile; ?>
			<input type="submit">
			<br>
		</form>
	<br>
	<div class="footer">
		<?php include 'navBar.php';?>
	</div>
</body>
</html>