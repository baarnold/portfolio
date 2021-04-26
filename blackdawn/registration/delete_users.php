<?php # Sript 10.2 - delete_users.php
// Script deletes selected user
require('includes/config.inc.php');
$page_title = 'Delete Selected User';
include('includes/header.php');

echo '<h1>Delete User</h1>';

// Check for valid ID
if ((isset($_GET['id'])) && (is_numeric($_GET['id']))) { // from view_users.php
	
	$id = $_GET['id']);
	
} elseif ((isset($_POST['id'])) && (is_numeric($_POST['id']))) { // from form submission
	
	$id = $_GET['id']);
	
} else { // No valid ID, kill script
	
	echo '<p class="error">This page has been accessed in error.</p>';
	include('includes/footer.php');
	exit();
	
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	if($_POST['confirm'] == YES) { //Delete record
	
		// Make query
		$query = "DELETE FROM users WHERE user_id=$id LIMIT 1";
		$result = mysqli_query($dbc, $query) or trigger_error("Query: $query\n<br />MySQL Error: " . mysqli_error($dbc));
		
		if(mysqli_affected_rows($dbc) == 1) { // If the query ran correctly
			
			// Print message
			echo '<p>The user has been deleted.</p>';
			
		} else { // Query failed
		
			echo '<p class="error">The user could not be deleted due to a system error.</p>';
			
		}
		
	} else { // No confirmation of deletion
	
		echo '<p>The user has not been deleted.  Please try again.</p>';
		
	}
	
} else { // Show form

	// Retrieve the user's information
	$query = "SELECT CONCAT(last_name, ', ', first_name) FROM users WHERE user_id=$id";
	$result = mysqli_query($dbc, $query) or trigger_error("Query: $query\n<br />MySQL Error: " . mysqli_error($dbc));
	
	if(mysqli_affected_rows($dbc) == 1) { // If the query ran correctly
			
		// Get user information
		$row = mysqli_fetch_array($result, MYSQLI_NUM);
		
		// Display the record to be deleted
		echo "<h3>Name: $row[0]</h3> Are you sure you want to delete this user?";
			
		// Create form
		echo '<form action="delete_user.php" method="post">
			<input type="radio" name="confirm" value="Confirm" /> Confirm
			<input type="radio" name="confirm" value="Cancel" checked="checked" /> Cancel
			<input type="submit" name="submit" value="Submit" />
			<input type="hidden" name="id" value="' . $id . '" />
			</form>';
			
	} else { // Invalid ID
		
		echo '<p class="error">This page has been accessed in error.</p>';
			
	}
		
} // End of main submission conditional

mysqli_close($dbc);

include('includes/footer.php');
?>