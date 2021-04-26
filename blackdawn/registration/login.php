<?php # Script 18.8 - login.php
// This is the login page for the site.
require('includes/config.inc.php');
$page_title = 'Login';
include('includes/header.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	require(MYSQL);
	
	// Validate the email address:
	if (!empty($_POST['email'])) {
		
		$email = mysqli_real_escape_string($dbc, $_POST['email']);
		
	} else {
		
		$email = FALSE;
		echo '<p class="error">You forgot to enter your email address.</p>';
		
	}
	
	// Validate the password
	if (!empty($_POST['pass'])) {
		
		$pass = mysqli_real_escape_string($dbc, $_POST['pass']);
		
	} else {
		
		$pass = FALSE;
		echo '<p class="error">You forgot to enter a password.</p>';
		
	}
	
	if ($email && $pass) { // If both email and pass are valid
	
		// Query database
		$query = "SELECT user_id, first_name, user_level FROM users WHERE (email='$email' AND pass=SHA1('$pass')) AND active IS NULL";
		$result = mysqli_query($dbc, $query) or trigger_error("Query: $query\n<br />MySQL Error: " . mysqli_error($dbc));
		
		if (@mysqli_num_rows($result) == 1) { // Match was made
		
			// Register values:
			$_SESSION = mysqli_fetch_array($result, MYSQLI_ASSOC);
			mysqli_free_result($result);
			mysqli_close($dbc);
			
			// Redirect user:
			$url = BASE_URL . 'index.php'; // Define url
			ob_end_clean(); // Delete buffer
			header("Location: $url");
			exit(); // Exit script
			
		} else { // If a match was not made
			
			echo '<p class="error">Email or password do not match records on file, or account has not been activated.</p>';
			
		}
		
	} else { // If it was unsuccessful
		
		echo '<p class="error">Please try again.</p>';
		
	}
		
	mysqli_close($dbc);
		
} // End of SUBMIT conditional
?>
	
	<p>Your browsers must allow cookies in order to log in.</p>
	<form action="login.php" method="post">
		<fieldset>
			<p><b>Email Address:</b> <input type="text" name="email" size="20" maxlength="80" /></p>
			<p><b>Password:</b> <input type="password" name="pass" size="20" maxlength="20" /></p>
			<div align="center"><input type="submit" name="submit" value="Login" /></div>
		</fieldset>
	</form>
	
	<?php include('includes/footer.php'); ?>