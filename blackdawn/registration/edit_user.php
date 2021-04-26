<?php # Sript 10.3 - edit_user.php
// Script edits selected user information
require('includes/config.inc.php');
$page_title = 'Edit Selected User';
include('includes/header.php');
require(MYSQL);

// Add links if user is administrator:
if (isset($_SESSION['user_id']) && $_SESSION['user_level'] == 1) {

    echo '<h1>Edit User</h1>';

    // Check for valid ID
    if ((isset($_GET['id'])) && (is_numeric($_GET['id']))) { // from view_users.php

        $id = $_GET['id'];

    } elseif ((isset($_POST['id'])) && (is_numeric($_POST['id']))) { // from form submission

        $id = $_POST['id'];

    } else { // No valid ID, kill script

        echo '<p class="error">This page has been accessed in error.</p>';
        include('includes/footer.php');
        exit();

    }

    // Check if form is submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $errors = array();

        // Check for first name
        if (empty($_POST['first_name'])) {

            $errors[] = 'No First Name Given.';

        } else {

            $fname = mysqli_real_escape_string($dbc, trim($_POST['first_name']));

        }

        // Check for last name
        if (empty($_POST['last_name'])) {

            $errors[] = 'No Last Name Given.';

        } else {

            $lname = mysqli_real_escape_string($dbc, trim($_POST['last_name']));

        }


        // Check for email
        if (empty($_POST['email'])) {

            $errors[] = 'No Email Given.';

        } else {

            $email = mysqli_real_escape_string($dbc, trim($_POST['email']));

        }

        if (empty($errors)) { // If there were no errors

            // Test for unique email address
            $query = "SELECT user_id FROM users WHERE email='$email' AND user_id != $id";
            $result = mysqli_query($dbc, $query) or trigger_error("Query: $query\n<br />MySQL Error: " . mysqli_error($dbc));

            if (mysqli_num_rows($result) == 0) { // Email doesn't exist already in the database

                // Make the query
                $query = "UPDATE users SET first_name='$fname', last_name='$lname', email='$email' WHERE user_id=$id LIMIT 1";
                $result = mysqli_query($dbc, $query) or trigger_error("Query: $query\n<br />MySQL Error: " . mysqli_error($dbc));

                if (mysqli_affected_rows($dbc)) { // If successful query

                    echo '<p>The user has been updated</p>';

                } else { // Query was unsuccessful

                    echo '<p class="error">The user could not be edited due to a system error.</p>';

                }

            } else { // Email is already registered

                echo '<p class="error">The email address has already been registered with a different account and cannot be used for this account.</p>';

            }

        } else { // Report errors

            echo '<p class="error">The following errors occurred:<br />';

            foreach ($errors as $msg) { // Print each error as a message

                echo " - $msg<br/>\n";

            }

            echo '</p><p>Please try again</p>';

        } // End if($errors) IF-ELSE

    } // End Submit conditional

    // Always show form

    // Retrieve user's information
    $query = "SELECT first_name, last_name, email FROM users WHERE user_id=$id";
    $result = mysqli_query($dbc, $query) or trigger_error("Query: $query\n<br />MySQL Error: " . mysqli_error($dbc));

    if (mysqli_num_rows($result) == 1) { // If Valid ID show form

        // Get user information
        $row = mysqli_fetch_array($result, MYSQLI_NUM);

        // Create form
        echo '<form action="edit_user.php" method="post">
            <p>First Name: <input type="text" name="first_name" size="40" maxlength="40" value="' . $row[0] . '" /></p>
            <p>Last Name: <input type="text" name="last_name" size="60" maxlength="60" value="' . $row[1] . '" /></p>
            <p>Email Address: <input type="text" name="email" size="80" maxlength="80" value="' . $row[2] . '" /></p>
            <p><input type="submit" name="submit" value="Submit" /></p>
            <input type="hidden" name="id" value="' . $id . '" />
            </form>';

    } else { // Not a valid user ID

        echo '<p class="error">This page has been accessed in error.</p>';

    }
}


mysqli_close($dbc);

include('includes/footer.php');
?>