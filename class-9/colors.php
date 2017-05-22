<?php require_once('session.php'); ?>
<?php 
	if (isset($_POST['bg_color'])) {
		$_SESSION['bgColor'] = $_POST['bg_color'];
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
		</section>
		<section>
			<form action="colors.php" method="post">
				<p>Choose your favorite background color</p>
				<p>
					<label><input type="radio" name="bg_color" value="limegreen"> limegreen</label>
				</p>
				<p>
					<label><input type="radio" name="bg_color" value="orange"> orange</label>
				</p>
				<p>
					<label><input type="radio" name="bg_color" value="tomato"> tomato</label>
				</p>
				<p>
					<label><input type="radio" name="bg_color" value="violet"> violet</label>
				</p>
				<p>
					<label><input type="radio" name="bg_color" value="transparent"> default</label>
				</p>
				<p>
					<input type="submit" value="Apply color">
				</p>
			</form>
		</section>
		<section>
			<hr>
			<a href="modify.php">Back to modify.php</a>
		</section>
	</main>
</body>
</html>