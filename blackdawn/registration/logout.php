<?php # Script 18.9 - logout.php
// This is the logout page for the site.
require('includes/config.inc.php');
$page_title = 'Logout';
include('includes/header.php');

// If no first_name session variable exists, redirect user
if (!isset($_SESSION['first_name'])) {
	
	$url = BASE_URL . 'index.php'; // Define the url
	ob_end_clean(); // Clear the buffer
	header("Location: $url");
	exit();
	
} else { // Logout user
	
	$_SESSION = array(); // Destroy variables
	session_destroy(); // Destroy the session itself
	setcookie(session_name(), '', time()-3600); // Destroy the cookie
	
}

// Print customized message
echo '<h3>You are now logged out.</h3>';

include('includes/footer.php');
?>