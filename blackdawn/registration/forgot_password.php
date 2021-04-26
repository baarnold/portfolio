<?php # Script 18.10 - forgot_password.php
// This page allows users to reset password if forgotten
require('includes/config.inc.php');
$page_title = 'Forgot Password';
include('includes/header.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	require(MYSQL);
	
	// Assume nothing
	$uid = FALSE;
	
	// Validate the email address
	if (!empty($_POST['email'])) {
		
		//Check for existance of email address
		$query = 'SELECT user_id FROM users WHERE email="' . mysqli_real_escape_string($dbc, $_POST['email']) . '"';
		$result = mysqli_query($dbc, $query) or trigger_error("Query: $query\n<br />MySQL Error: " . mysqli_error($dbc));
		
		if (mysqli_num_rows($result) == 1) { // Retrieve user ID
			
			list($uid) = mysqli_fetch_array($result, MYSQLI_NUM);
			
		} else { // No DB match
		
			echo '<p class="error">The submitted email address does not match those on file.</p>';
			
		}
		
	} else { // No email
	
		echo '<p class="error">No email address entered</p>';
		
	} // End of empty POST IF
	
	if($uid) { // If it checks out
		
		// Create a new, random password
		$pass = substr(md5(uniqid(rand(), true)), 3, 10);
		
		// Update database:
		$query = "UPDATE users SET pass=SHA1('$pass') WHERE user_id=$uid LIMIT 1";
		$result = mysqli_query($dbc, $query) or trigger_error("Query: $query\n<br />MySQL Error: " . mysqli_error($dbc));
		
		if (mysqli_affected_rows($dbc) == 1) { // Query ran properly
			
			// Send email:
			$body = "Your password to log into Blackdawn-RP has been temporarily changed to '$pass'. Please log in using this 
				password and this email address.  You may then change the password to something more familiar.";
			mail($_POST['email'], 'Your temporary password at Blackdawn-RP', $body, 'From: admin@blackdawn-rp.com');
			
			// Print message and wrap up:
			echo "<h3>Your password has been changed on " . gmdate("D, M d Y") . " at " . gmdate("H:i:s e") . " from IP {$_SERVER['REMOTE_ADDR']}.
				You will receive the new, temporary password, at the email address that was registered.  Once you have logged in with this password, 
				you may change it by clicked on the 'Change Password' link.</h3>";
			
			mysqli_close($dbc);
			include('includes/footer.php');
			exit(); // Stop script
			
		} else { // Query did not run properly
		
			echo '<p class="error">Your password could not be changed due to an error in the system.  We apologize for the inconvenience.</p>';
			
		}
		
	} else { // Failed validation
	
		echo '<p class="error">Please try again.</p>';
		
	}
	
	mysqli_close($dbc);
	
} // End main Submit conditional
?>

<h1>Reset Your Password</h1>
<p>Enter your email address below and your password will be reset.</p>
<form action="forgot_password.php" method="post">
	<fieldset>
		<p><b>Email Address:</b> <input type="text" name="email" size="20" maxlength="80" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" /></p>
	</fieldset>
	<div align="center"><input type="submit" name="submit" value="Reset Password" /></div>
</form>

<?php include('includes/footer.php'); ?>