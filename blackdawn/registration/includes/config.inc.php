<?php # Script 18.3 - config.inc.php
	/* This script:
	 * - defines constants and settings
	 * - dictates how errors are handled
	 * - defines useful functions
	 */
	 
	 // Document who created the site, when, and why
	 
	 // ******************************** //
	 // *********** SETTINGS *********** //
	 
	 // Flag variable for site status
	 define('LIVE', FALSE);
	 
	 // Admin contact email
	 define('EMAIL', 'admin@blackdawn-rp.com');
	 
	 // Site URL (for redirections)
	 define('BASE_URL', 'http://www.blackdawn-rp.com/registration/');
	 
	 // Location of MySQL Connection script
	 define('MYSQL', 'includes/mysqli_connect.php');
	 
	 // Adjust the time zone for PHP 5.1 and greater:
	 date_default_timezone_set('US/Pacific');
	 
	 // *********** SETTINGS *********** //
	 // ******************************** //
	 
	 
	 // ******************************** //
	 // ******* ERROR MANAGEMENT ******* //
	 
	 // Create the error handler:
	 function my_error_handler($e_number, $e_message, $e_file, $e_line, $e_vars) {
		
		// Build Error Message
		$message = "An error occurred in the script '$e_file' on line $e_line: $e_message\n";
		
		// Add date and time
		$message .= "Date/Time: " . date('n-j-Y H:i:s') . "\n";
		
		if (!LIVE) { // Development (print error)
			
			// Show the error message:
			echo '<div class="error">' . nl2br($message);
			
			// Add variables and backtrace:
			echo '<pre>' . print_r($e_vars, 1) . "\n";
			debug_print_backtrace();
			echo '</pre></div>';
			
		} else { // Don't show error:
		
			// Send email to admin:
			$body = $message . "\n" . print_r($e_vars, 1);
			mail(EMAIL, 'Site Error!', $body, 'From: admin@blackdawn-rp.com');
			
			// Only print an error message if the error isn't a notice
			if ($e_number != E_NOTICE) {
				echo '<div class="error">A system error occurred.  We apologize for the inconvenience.</div><br />';
			}
		}
	}

	// Use error handler
	set_error_handler('my_error_handler');

	 // ******* ERROR MANAGEMENT ******* //
	 // ******************************** //