<?php 

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// Insert into db
	
		$query = 'INSERT INTO requirements (name, learn, act, share, comments, journal) VALUES (:name, :learn, :act, :share, :comments, :journal)';
		$stmt = $db->prepare($query);
		$pdo = $stmt->execute(array(':name' => $_POST['name'], ':learn' => $_POST['learn'], ':act' => $_POST['act'], ':share' => $_POST['share'], ':comments' => $_POST['comments'], ':journal' => $_POST['journal']));
	
		$newId = $db->lastInsertId('requirements_id_seq');
	
		/*foreach ($_POST['topics'] as $topic) {
			$query = 'INSERT INTO scripture_topic (scriptures_id, topic_id) VALUES (:scripture, :topic)';
			$stmt = $db->prepare($query);
			$stmt->execute(array(':scripture' => $newId, ':topic' => $topic));
		}*/
	}
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
		<form action="requirements.php" method="POST">
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