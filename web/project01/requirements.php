<?php include 'db.php';

	$youth_id = $_GET['id'];

	$stmt = $db->prepare('SELECT name FROM youth WHERE id=:id');
	$stmt->bindValue(':id', $youth_id, PDO::PARAM_INT);
	$stmt->execute();
	$youth_rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
	$youth_name = $youth_rows[0]['name'];


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
	<h1>Duty to God Requirements for 
		<?php echo $youth_name ?> </h1>
	<?php
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