<?php # Script 18.11 - change_password.php
// Allows a logged-in user to change their password
require('includes/config.inc.php');
$page_title = 'Change Password';
include('includes/header.php');

// If no first_name session variable exists, redirect user_error
if (!isset($_SESSION['first_name'])) {
	
	$url = BASE_URL . 'index.php'; // Define the url
	ob_end_clean(); // Clear the buffer
	header("Location: $url");
	exit();
	
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	require(MYSQL);
	
	//Check for new password and match against confirmed password
	$pass = FALSE;
	
	// Check for password and match against confirmed password
	if (preg_match('/^\w{4,20}$/', $_POST['password1'])) {
		if ($_POST['password1'] == $_POST['password2']) {
			$pass = mysqli_real_escape_string($dbc, $_POST['password1']);
		} else {
			echo '<p class="error">Your password did not match what we have on file for your account.</p>';
		}
	} else {
		echo '<p class="error">Please enter a valid password.</p>';
	}
	
	if ($pass) {
		
		// Make Query
		$query = "UPDATE users SET pass=SHA1('$pass') WHERE user_id={$_SESSION['user_id']} LIMIT 1";
		$result = mysqli_query($dbc, $query) or trigger_error("Query: $query\n<br />MySQL Error: " . mysqli_error($dbc));
		
		if (mysqli_affected_rows($dbc) == 1) { // If successful
			
			//Send email if desired
			// $body = "Your password to log into Blackdawn-RP has been changed on " . gmdate("D, M d Y") . " at " . gmdate("H:i:s e") 
			//	. " from IP {$_SERVER['REMOTE_ADDR']}. Please log in using this password and this email address.  
			//	You may then change the password to something more familiar.";
			// mail($_POST['email'], 'Password Changed at Blackdawn-RP', $body, 'From: admin@blackdawn-rp.com');
			
			echo '<h3> Your password has successfully been changed.</h3>';
			mysqli_close($dbc);
			include('includes/footer.php');
			exit();
			
		} else { // Did not run successfully
		
			echo '<p class="error">Your password was not successfully changed.  Make sure your new password is different than the current 
				password.  Contact the system administrator if you believe this is in error or the problem persists.</p>';
				
		}
		
	} else { // Failed validation
	
		echo '<p class="error">Please try again.</p>';
		
	}
	
	mysqli_close($dbc);
	
} // end of main Submit conditional.
?>

<h1>Change Password</h1>
<form action="change_password.php" method="post">
	<fieldset>
		<p><b>New Password:</b> <input type="password" name="password1" size="20" maxlength="20" /> <small>Use only letters, numbers, and the 
		underscore.  Must be between 4 and 20 characters long.</small></p>
		<p><b>Confirm New Password:</b> <input type="password" name="password2" size="20" maxlength="20" />
	</fieldset>
	<div align="center"><input type="submit" name="submit" value="Change Password" /></div>
</form>

<?php include('includes/footer.php');