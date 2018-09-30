<!DOCTYPE html>
<html>
<head>
<title>Homepage</title>
<link rel="stylesheet" type="text/css" href="index.css">
</head>
	<body>
		<header id="ninerHeader">
			<img  src="49erheader.jpg" alt="49er Header">	
		</header>
		<?php include 'navBar.php';?>
		<br>
		<div id="main">
			<div id="mainPhoto">
			</div>
			<h1>What Happened This Weekend?</h1>
			<img src="jimmyG.jpg" alt="Garoppolo hurt">
		</div>
		<div id="newsFeed">
			<h1>Latest '9er News</h3>
				<p><a href="http://www.espn.com/video/clip?id=24784670&ex_cid=espnapi_public">Jimmy G will miss the rest of the season with torn ACL</a></p>
				<br>
				<p><a href="https://www.49ers.com/video/coming-soon-49ers-at-chargers-in-week-4">Video: 49ers take on the Chargers this Sunday</a></p>
				<br>
				<h3>Tell us about yourself</h3>
				<form action="team.php" method="post">
					Favorite team: <input type="text" name="team"><br>
					<br>
					Favorite player: <input type="text" name="player"><br>
					<br>
					<input type="submit">
				</form>
		</div>
		<div class="footer">
			<?php include 'navBar.php';?>
		</div>
	</body>
</html>