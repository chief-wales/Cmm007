<?php
	 include_once 'header.php';
	?>

	<section class="Login-form"> 
		<h2>Log in</h2>
	<form action="includes/login.inc.php" method="post"> 
		<input type="text" name="uid" placeholder="Username/Email">
		<input type="password" name="pwd" placeholder="password">
		<button type="submit" name="submit">Log in</button>
	</form> 
	<?php
	//To check the form has been submitted correctly
	if (isset($_GET["error"])) {
		if ($_GET["error"] == "emptyinput") {
			echo "<p> Fill in all fields!</p>";
		}
		else if ($_GET["error"] == "wronglogin") {
			echo "<p>Incorrect login credentials!</p>";
		}
	
	}
	?>
	</section>

	
	<?php
		 include_once 'footer.php';
	?>