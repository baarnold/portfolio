<?php # Script 18.6 - register.php
// This is the registration page for the site.
require('includes/config.inc.php');
$page_title = 'Register';
include('includes/header.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	// Need the database connection:
	require(MYSQL);
	
	// Trim all the incoming data:
	$trimmed = array_map('trim', $_POST);
	
	// Assume invalid values
	$fname = $lname = $email = $pass = FALSE;
	
	// Check for a first name:
	if (preg_match ('/^[A-Z \'.-]{2,20}$/i', $trimmed['first_name'])) {
		$fname = mysqli_real_escape_string($dbc, $trimmed['first_name']);
	} else {
		echo '<p class="error">Please enter your first name.</p>';
	}
	
	// Check for a last name
	if (preg_match ('/^[A-Z \'.-]{2,20}$/i', $trimmed['last_name'])) {
		$lname = mysqli_real_escape_string($dbc, $trimmed['last_name']);
	} else {
		echo '<p class="error">Please enter your last name.</p>';
	}
	
	// Check for an email address
	if (filter_var($trimmed['email'], FILTER_VALIDATE_EMAIL)) {
		$email = mysqli_real_escape_string($dbc, $trimmed['email']);
	} else {
		echo '<p class="error">Please enter a valid email address.</p>';
	}
	
	// Check for password and match against confirmed password
	if (preg_match('/^\w{4,20}$/', $trimmed['password1'])) {
		if ($trimmed['password1'] == $trimmed['password2']) {
			$pass = mysqli_real_escape_string($dbc, $trimmed['password1']);
		} else {
			echo '<p class="error">Your password did not match what we have on file for your account.</p>';
		}
	} else {
		echo '<p class="error">Please enter a valid password.</p>';
	}
	
	if ($fname && $lname && $email && $pass) { // If everything works
		
		//Make sure email is available
		$query = "SELECT user_id FROM users WHERE email='$email'";
		$result = mysqli_query($dbc, $query) or trigger_error("Query: $query\n<br />MySQL Error: " . mysqli_error($dbc));
		
		if (mysqli_num_rows($result) == 0) { // Available
		
			//create activation code
			$actCode = md5(uniqid(rand(), true));
			
			// Add user to database
			$query = "INSERT INTO users (email, pass, first_name, last_name, active, registration_date) VALUES
					('$email', SHA1('$pass'), '$fname', '$lname', '$actCode', NOW())";
			$result = mysqli_query($dbc, $query) or trigger_error("Query: $query\n<br />MySQL Error: " . mysqli_error($dbc));
			
			if (mysqli_affected_rows($dbc) == 1) { // If it ran correctly
			
				// Send email
				$body = "Thank you for registering a Blackdawn-RP account.  To activate, please lick on this link:\n\n";
				$body .= BASE_URL . 'activate.php?x=' . urlencode($email) . "&y=$actCode";
				mail($trimmed['email'], 'Registration Confirmation', $body, 'From: admin@blackdawn-rp.com');
				
				// Finish the page:
				echo '<h3>Thank you for registering. A confirmation email has been sent to your registered email address.  
					Please click on the link provided in the email in order to activate your account.</h3>';
				include('includes/footer.php');
				exit(); // Stop page.
				
			} else { // If it did not run correctly
			
				echo '<p class="error">You could not be registered due to a system error.  We apologize for the inconvenience.</p>';
			
			}
		
		} else { // Email address unavailable
		
			echo '<p class="error">That email address has already been registered. If you have forgotten your password, use the 
				link at right to have your password sent to you.</p>';
		}
		
	} else { // If a data test failed
	
		echo '<p class="error">Please try again.</p>';
		
	}
	
	mysqli_close($dbc);
	
} // End of the main Submit conditional
?>

<h1>Register</h1>
<form action="register.php" method="post">
	<fieldset>
	
	<p><b>First Name:</b> <input type="text" name="first_name" size="40" maxlength="40" value="<?php if (isset($trimmed['first_name'])) echo $trimmed['first_name']; ?>" /></p>
	
	<p><b>Last Name:</b> <input type="text" name="last_name" size="60" maxlength="60" value="<?php if (isset($trimmed['last_name'])) echo $trimmed['last_name']; ?>" /></p>
	
	<p><b>Email Address:</b> <input type="text" name="email" size="80" maxlength="80" value="<?php if (isset($trimmed['email'])) echo $trimmed['email']; ?>" /></p>
	
	<p><b>Password:</b> <input type="password" name="password1" size="20" maxlength="20" value="<?php if (isset($trimmed['password1'])) echo $trimmed['password1']; ?>" />
	<small>Use only letters, numbers, and the underscore. Must be between 4 and 20 characters long</small></p>
	
	<p><b>Confirm Password:</b> <input type="password" name="password2" size="20" maxlength="20" value="<?php if (isset($trimmed['password2'])) echo $trimmed['password2']; ?>" /></p>
	
	</fieldset>
	
	<div align="center"><input type="submit" name="submit" value="Register" /></div>
	
</form>

<?php include('includes/footer.php'); ?>