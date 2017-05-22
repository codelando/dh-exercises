<?php require_once('session.php'); ?>
<?php
	// If add flag is set, add 1 to the counter
	if (isset($_POST['add'])) {
		$_SESSION['counter']++;
	// If reset flag is set, set it to 0		
	} elseif (isset($_POST['reset'])) {
		$_SESSION['counter'] = 0;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DH Exercises - Class 9 - show.php</title>
	<style>
		body { background-color: <?php echo $_SESSION['bgColor'] ?> }
	</style>
</head>
<body>
	<main>
		<section>
			<h1>DH Exercises - Class 9 - modify.php</h1>
			<p><strong>$_SESSION['counter']:</strong> <?php echo $_SESSION['counter'] ?></p>
		</section>
		<section>
			<hr>
			<a href="modify.php">Back to modify.php</a>
		</section>
	</main>
</body>
</html>