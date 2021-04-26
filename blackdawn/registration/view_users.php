<?php # Sript 10.1 - view_users.php
// Script retrieves all records from users table
// Allows edit and delete pages
require('includes/config.inc.php');
$page_title = 'View Current Users';
include('includes/header.php');
require(MYSQL);

echo '<h1>Registered Users</h1>';

if (isset($_SESSION['user_id']) && $_SESSION['user_level'] == 1) {
    //Number of records to display
    $display = 10;
    
    // Determine how many pages for pagination
    if(isset($_GET['p']) &&  is_numeric($_GET['p'])) { // Already been determine
    	
    	$pages = $_GET['p'];
    	
    } else { // Need to determine
    
    	// Count number of records
    	$query = "SELECT COUNT(user_id) FROM users";
    	$result = mysqli_query($dbc, $query) or trigger_error("Query: $query\n<br />MySQL Error: " . mysqli_error($dbc));
    	$row = @mysqli_fetch_array($result, MYSQLI_NUM);
    	$records = $row[0];
    
    	// Calculate number of pages
    	if ($records > $display) { // More pages needed
    		
    		$pages = ceil($records/$display);
    		
    	} else {
    		
    		$pages = 1;
    		
    	}
    	
    } // End of pages IF
    
    // Where in database to return results
    if (isset($_GET['s']) && is_numeric($_GET['s'])) {
    	
    	$start = $_GET['s'];
    	
    } else {
    	
    	$start = 0;
    	
    }
    
    // Define query
    $query = "SELECT last_name, first_name, email, DATE_FORMAT(registration_date, '%M %d, %Y') AS dr, user_id FROM users ORDER BY registration_date ASC LIMIT $start, $display";
    $result = mysqli_query($dbc, $query) or trigger_error("Query: $query\n<br />MySQL Error: " . mysqli_error($dbc));
    
    // Count the number of returned rows:
    $num = mysqli_num_rows($result);
    
    if ($num > 0) {
    	
    	// Print number of users
    	echo "<p>There are currently $num registered users.</p>\n";
    	
    	// Table header:
    	echo '<table align="center" cellspacing="0" cellpadding="5" width="75%">
    		<tr>
    			<td align="left"><b>Edit</b></td>
    			<td align="left"><b>Delete</b></td>
    			<td align="left"><b>Last Name</b></td>
    			<td align="left"><b>First Name</b></td>
    			<td align="left"><b>Email Address</b></td>
    			<td align="left"><b>Registration Date</b></td>
    		</tr>';
    		
    	//Fetch and print records
    	$bg = '#eeeeee'; // Set initialbackground color
    	
    	while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    		
    		$bg = ($bg=='#eeeeee' ? '#ffffff' : '#eeeeee'); // Alternate background colors based on current color
    		echo '<tr bgcolor="' . $bg . '">
    			<td align="left"><a href="edit_user.php?id=' . $row['user_id'] .'">Edit</a></td>
    			<td align="left"><a href="delete_user.php?id=' . $row['user_id'] .'">Delete</a></td>
    			<td align="left">' . $row['last_name'] . '</td>
    			<td align="left">' . $row['first_name'] . '</td>
    			<td align="left">' . $row['email'] . '</td>
    			<td align="left">' . $row['dr'] . '</td>
    		</tr>';
    	} // End of While loop
    	
    	echo '</table>';
    	mysqli_free_result($result);
    	mysqli_close($dbc);
    	
    	// Make links to other pages if necessary
    	if ($pages > 1) {
    		
    		// Add some spacing and start a paragraph
    		echo '<br /><p>';
    		
    		// Determine which page the script is on:
    		
    		$current_page = ($start/$display) + 1;
    		
    		// If not the first page, make a Previous link:
    		if ($current_page != 1) {
    			
    			echo '<a href="view_users.php?s=' . ($start - $display) . '&p=' . $pages . '">Previous</a> ';
    		
    		}
    		
    		// Make all the numbered pages
    		for ($i = 1; $i <= $pages; $i++) {
    			
    			if ($i != $current_page) {
    				
    				echo '<a href="view_users.php?s=' . (($display * ($i - 1))) . '&p=' . $pages . '">' . $i . '</a> ';
    				
    			} else {
    				
    				echo $i . ' ';
    			}
    			
    		} // End FOR loop
    		
    		// If it's not the last page, make a Next button
    		
    		if ($current_page != $pages) {
    			
    			echo '<a href="view_users.php?s=' . ($start + $display) . '&p=' . $pages . '">Next</a>';
    			
    		}
    		
    		echo '</p>'; // Close the paragraph
    		
    	} // End of the links section 
    	
    } else {
    	
    	echo '<p class="error">There are no current registered users.</p>';
    	
    }
    
    
    #
    # Get the Instance IDs of all available servers
    # In this case there is only one so no loop statements.
    #
    echo '<hr><hr><h1>Post Server API</h1>';
    
    #set the array that includes the required variables as per the documentation
    $dat = array('action' => 'get_instance_ids', 'API' => 'dc7YnuGreHU5VdQnyFE66jGwNKEBVajkR9vVCfK97DEdQrSJSW7S3qqsRcysXp5X');
    
    #Initialize the cURL, set request type, set POST to true, set post fields to be array, RETURNTRANSFER means the 
    #  return will be the data; by default, it returns success or failure only
    $cr = curl_init('http://clients.hostwinds.com/cloud/api.php');
    curl_setopt($cr, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($cr, CURLOPT_POST, 1);
    curl_setopt($cr, CURLOPT_POSTFIELDS, $dat);
    curl_setopt($cr, CURLOPT_RETURNTRANSFER, true);
    
    #set variable res to be equal to the return from executing the cURL variablie
    $res = curl_exec($cr);
    
    #debug code - print $res
    #echo '<hr>';
    #echo $res;
    #echo '<hr>';
    
    #RETURNTRANSFER returns a json; decode the json into an array (puts it into a new array)
    $serverDetails = json_decode($res, true);
    
    #debug code
    #print_r($serverDetails);

    #results are array(success=>array(index=>array(key=>value)))
    ?>
    <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-10">
            <h4 class="card-header">Server Name: <?php echo $serverDetails['success'][0]['srvrname']; ?></h4>
            <div class="card-body">
              <p class="card-text">
                  <ul>
                      <li>Server ID: <?php echo $serverDetails['success'][0]['id']; ?></li>
                      <li>Hostname: <?php echo $serverDetails['success'][0]['hostname']; ?></li>
                      <li>Dedicated IP: <?php echo $serverDetails['success'][0]['dedicatedip']; ?></li>
                  </ul>
              </p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-blackdawn-inactive disabled">Reboot</a>
            </div>
          </div>
        </div>
    </div>
    <?php
    
    #
    # Using a JSON Object
    # Returns Authorization Failure.  Debug code as needed
    #
    echo '<hr><hr><h1>Post JSON Server API</h1>';

    $data = ["action" => "get_instance_ids", "API" => "dc7YnuGreHU5VdQnyFE66jGwNKEBVajkR9vVCfK97DEdQrSJSW7S3qqsRcysXp5X"];
    $data_string = json_encode($data);
    //echo 'Data String contents<br>';
    //echo $data_string;
    
    //echo '<hr>';
    
    $ch = curl_init('http://clients.hostwinds.com/cloud/api.php');
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($cr, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
         'Content-Type: application/json',
         'Content-Length: ' . strlen($data_string)
    ]);
    
    $result = json_decode(curl_exec($ch), true);

    //echo $result;
    
    //$result = json_decode($result, true);
    ?>
    <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-10">
            <h4 class="card-header">Server Name: <?php echo $result['success'][0]['srvrname']; ?></h4>
            <div class="card-body">
              <p class="card-text">
                  <ul>
                      <li>Server ID: <?php echo $result['success'][0]['id']; ?></li>
                      <li>Hostname: <?php echo $result['success'][0]['hostname']; ?></li>
                      <li>Dedicated IP: <?php echo $result['success'][0]['dedicatedip']; ?></li>
                  </ul>
              </p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-blackdawn" data-name="Reboot" data-action="reboot" data-postdata='{"serviceid":200774}'>Reboot</a>
            </div>
          </div>
        </div>
    </div>
    <?php
    
    
    #
    # Hardcoded GET request of the variables needed
    #
    #
    echo '<hr><hr><h1>Get Server API</h1>';
    
    #cURL the GET request with the variables input as needed -  ?variable=value&variable=value...
    $get = curl_init('http://clients.hostwinds.com/cloud/api.php?action=get_instance_ids&API=dc7YnuGreHU5VdQnyFE66jGwNKEBVajkR9vVCfK97DEdQrSJSW7S3qqsRcysXp5X');
    curl_setopt($get, CURLOPT_RETURNTRANSFER, true);
    $getRes = json_decode(curl_exec($get), true);
    
    #debug code
    #print_r($getRes);

    #results are array(success=>array(index=>array(key=>value)))
    ?>
    <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-10">
            <h4 class="card-header">Server Name: <?php echo $getRes['success'][0]['srvrname']; ?></h4>
            <div class="card-body">
              <p class="card-text">
                  <ul>
                      <li>Server ID: <?php echo $getRes['success'][0]['id']; ?></li>
                      <li>Hostname: <?php echo $getRes['success'][0]['hostname']; ?></li>
                      <li>Dedicated IP: <?php echo $getRes['success'][0]['dedicatedip']; ?></li>
                  </ul>
              </p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-blackdawn" data-name="Reboot" data-action="reboot" data-postdata='{"serviceid":200774}'>Reboot</a>
            </div>
          </div>
        </div>
    </div>
    <?php

    
} else {
    echo 'You do not have permissions to view this page.';
}

include('includes/footer.php');
?>
	