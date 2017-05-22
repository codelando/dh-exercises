<?php require_once('session.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DH Exercises - Class 9 - modify.php</title>
	<style>
		body { background-color: <?php echo $_SESSION['bgColor'] ?> }
	</style>
</head>
<body>
	<main>
		<section>
			<h1>DH Exercises - Class 9 - modify.php</h1>
			<form action="show.php" method="post">
				<button type="submit" name="add" value="1">Add to counter</button>
				<button type="submit" name="reset" value="1">Reset counter</button>
			</form>		
		</section>
		<section>
			<hr>
			<a href="show.php">Back to show.php</a>
		</section>
	</main>
</body>
</html>