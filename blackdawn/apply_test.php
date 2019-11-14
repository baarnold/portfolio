<?php
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    
    
    $email_to = "contact@blackdawn-rp.com";
    $email_subject = "New Application from " . $_POST['oocName'];
    
    function died($error){
        echo "We are very sorry, but an error occurred with the form you submitted. ";
        echo "These errors appear below: <br><br>";
        echo $error . "<br><br>";
        echo "Please go back and fix the errors: <a href='http://www.blackdawn-rp.com/apply.php'>Application Form</a>";
        die();
    }


    $icName = $_POST['icName'];
    $oocName = $_POST['oocName'];
    $discord = $_POST['discordName'];
    $email_from = $_POST['email'];
    $level = $_POST['charlevel'];
    $race = $_POST['race'];
    $class = $_POST['class'];
    
    function isChecked($check, $value) {
        if(!empty($_POST[$check])) {
            foreach($_POST[$check] as $checkval) {
                if($checkval == $value) {
                    return $value;
                }
            }
        }
        return false;
    }
    
    $roleplay = "";
    $roleplay .= isChecked('roleplay', 'Casual/Random');
    $roleplay .= isChecked('roleplay', 'Event/Story') . ", ";
    $roleplay .= isChecked('roleplay', 'Cross-Faction') . ", ";
    $roleplay .= isChecked('roleplay', 'Forum/Chat') . ", ";
    
    $pvp = "";
    $pvp .= isChecked('pvp', 'Warfronts') . ", ";
    $pvp .= isChecked('pvp', 'Casual BGs') . ", ";
    $pvp .= isChecked('pvp', 'Arenas') . ", ";
    $pvp .= isChecked('pvp', 'Rated BGs');
    
    $pve = "";
    $pve .= isChecked('pve', 'LFG/LFR');
    $pve .= isChecked('pve', 'Normals/Heroics') . ", ";
    $pve .= isChecked('pve', 'Transmog') . ", ";
    $pve .= isChecked('pve', 'Mythics') . ", ";
    
    $other ="";
    $other .= isChecked('other', 'Blizzard Games');
    $other .= isChecked('other', 'Other Hobbies') . ", ";
    $other .= isChecked('other', 'Socializing') . ", ";
    $other .= isChecked('other', 'Non-Blizzard Games') . ", ";
    
    $experience = $_POST['experience'];
    $overview = $_POST['overview'];
    $interest = $_POST['interest'];
    
        $error_message = "";
    $email_regex = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    
    if(!preg_match($email_regex, $email_from)) {
        $error_message .= "The email address provided does not appear to be valid.<br>";
    }
    
    //Regex will allow non-English latin characters common in RP names
    $string_regex = '/^[\p{Latin}[A-Za-z]+$/m';
    
    if(!preg_match($string_regex, $oocName)) {
        $error_message .= "The OOC name provided does not appear valid.  If using special characters we recommend providing an email to contact you at.<br>";
    }
    
    if(strlen($experience) < 2) {
        $error_message .= "Please list your previous RP experience, or state /'None/'.";
    }
    
    if(strlen($overview) < 2) {
        $error_message .= "Please provide a character overview.";
    }
    
    if(strlen($interest) < 2) {
        $error_message .= "Please enlighten us as to why you were interested in applying for Blackdawn.";
    }
    
    if(strlen($error_message) > 0) {
        died($error_message);
    }
    
    $email_message = "Form Details Below.\n\n";
    
    //Clean string of the following
    function clean_string($string) {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }
    
    $email_message .= "OOC Name: " .clean_string($ooccName) . "\n";
    $email_message .= "IC Name: " .clean_string($icName) . "\n";
    $email_message .= "Discord: " .clean_string($discord) . "\n";
    $email_message .= "Email: " .clean_string($email_from) . "\n";
    $email_message .= "Level: " .clean_string($level) . "\n";
    $email_message .= "Race: " .clean_string($race) . "\n";
    $email_message .= "Class: " .clean_string($class) . "\n";
    $email_message .= "Roleplay Interests: " .clean_string($roleplay) . "\n";
    $email_message .= "PVP Interests: " .clean_string($pvp) . "\n";
    $email_message .= "PVE Interests: " .clean_string($pve) . "\n";
    $email_message .= "Guild Interests: " .clean_string($other) . "\n";
    $email_message .= "Previous RP Experience: " .clean_string($experience) . "\n";
    $email_message .= "Character Overview: " .clean_string($overview) . "\n";
    $email_message .= "Why they are Interested in Blackdawn: " .clean_string($interest) . "\n";
    
    $email_message = wordwrap($email_message, 70);
    
    $headers = 'From: ' . $email_from . "\r\r" . 'Reply-To: ' . $email_from . "\r\r" . 'X-Mailer: PHP/' . phpversion();


?>
<!DOCTYPE html>
    <html lang="en">
    
      <head>
    
        <?php include('includes/head.html'); ?>
    
      </head>
    
      <body>
    
        <?php include('includes/navbar-top.html'); ?>
    
        <!-- Page Content -->
        <div class="container">
    
          <!-- Page Heading/Breadcrumbs -->
          <h3 class="mt-4 mb-3">Apply
            <small></small>
          </h3>
    
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Apply</li>
          </ol>
      
          <div>
            <h1 class="display-1">Thank you!</h1>
            <p>Your application has been submitted.  We will contact you in-character or via email once the review is complete.</p>
            <p>In the mean time, feel free to review any of our other pages:</p>
            <ul>
              <li>
                <a href="index.php">Home</a>
              </li>
              <li>
                <a href="information.php">Information</a>
              </li>
              <li>
                <a href="history.php">History</a>
              </li>
              <li>
                <a href="rules.php">Rules</a>
              </li>
              <li>
                <a href="profile-template.php">Profile Template</a>
              </li>
              <li>
                <a href="contact.php">Contact</a>
              </li>
            </ul>
          </div>
          <!-- /.jumbotron -->
    
        </div>
        <!-- /.container -->
    		
    		<?php include('includes/footer.html');?>
    		
            <!-- Bootstrap core JavaScript -->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
        </body>
    
    </html>
