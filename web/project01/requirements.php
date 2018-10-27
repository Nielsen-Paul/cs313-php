<?php include 'db.php';

	$youth_id = $_GET['id'];

	//get youth's name based on id
	$stmt = $db->prepare('SELECT name FROM youth WHERE id=:id');
	$stmt->bindValue(':id', $youth_id, PDO::PARAM_INT);
	$stmt->execute();
	$youth_rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
	$youth_name = $youth_rows[0]['name'];

	//get youth's requirements based on id
	//$statement = $db->query('SELECT name, learn, act, share, comments, journal FROM requirements WHERE youth_id=:youth_id');
	//$statement->bindValue(':youth_id', $youth_id, PDO::PARAM_INT);
	//$statement->execute();


	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// Insert into db
	
		$query = 'INSERT INTO requirements (name, learn, act, share, comments, journal) VALUES (:name, :learn, :act, :share, :comments, :journal)';
		$stmt = $db->prepare($query);
		$pdo = $stmt->execute(array(':name' => $_POST['name'], ':learn' => $_POST['learn'], ':act' => $_POST['act'], 
			':share' => $_POST['share'], ':comments' => $_POST['comments'], ':journal' => $_POST['journal']));
	
		$newId = $db->lastInsertId('requirements_id_seq');

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
			$statement = $db->prepare('SELECT name, learn, act, share, comments, journal FROM requirements WHERE youth_id=:youth_id');
			$statement->bindValue(':youth_id', $youth_id, PDO::PARAM_INT);
			$statement->execute();
			while ($row = $statement->fetch(PDO::FETCH_ASSOC)): ?>
				<form action="input.php" method="POST">
					<input type="hidden" name="youth_id" value="<?php echo $youth_id; ?>" />
					<input type="hidden" name="name" value="<?php echo($row['name']); ?>" />
					<?php echo '<strong>' . $row['name'] . ' - </strong>'; ?>
					<label> Learn - </label><input type="checkbox" name="learn" value="yes" <?php echo ($row['learn']==1 ? 'checked' : '');?> />
					<label> Act - </label><input type="checkbox" name="act" value="yes" <?php echo ($row['act']==1 ? 'checked' : '');?> />
					<label> Share - </label><input type="checkbox" name="share" value="yes" <?php echo ($row['share']==1 ? 'checked' : '');?> />
					<label> Comment - </label><input id="comments" type="text" name="comments" value="<?php echo($row['comments']); ?>" /><br>
					<label> Journal - </label><input id="journal" type="text" name="journal" value="<?php echo($row['journal']); ?>" /><br>
					<?php echo($row['journal']); ?>
					<input type="submit">
				</form>
				<br>
			<?php endwhile; ?>
	<br>
	<div class="footer">
		<?php include 'navBar.php';?>
	</div>
</body>
</html>