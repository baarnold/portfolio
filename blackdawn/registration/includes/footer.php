		<!-- Start of Footer -->
		</div><!-- Content -->

		<div id="menu">
			<a href="index.php" title="Home Page">Home</a><br />
			<?php # Script 18.2 - footer.html
			// This page completes the HTML template
			
			// Display links based upon the login status:
			if (isset($_SESSION['user_id'])) {
				echo '<a href="logout.php" title="Logout">Logout</a><br /> 
					<a href="change_password.php" title="Change Your Password">Change Password</a><br />';
			
				// Add links if user is administrator:
				if ($_SESSION['user_level'] == 1) {
					echo '<a href="view_users.php" title="View All Users">View Users</a><br />
						<a href="#">Some Admin Page</a><br />';
				}
				
			} else { // Not Logged In
				echo '<a href="register.php" title="Register for the Site">Register</a><br />
					<a href="login.php" title="Login">Login</a><br />
					<a href="forgot_password.php" title="Password Retrieval">Retrieve Password</a><br />';
			}
			?>
			<a href="#">Some Page</a><br />
			<a href="#">Other Page</a><br />
		</div><!-- Menu -->

	</body>
<?php // Flush buffered output
	ob_end_flush();
?>

</html>