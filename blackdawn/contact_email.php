<?php
    #echo "<pre>";
    #print_r($_POST);
    #echo "</pre>";

    $email_to = "contact@blackdawn-rp.com";
    $email_subject = "New Comment from " . $_POST['contact_name'];
    
    function died($error){
        echo "We are very sorry, but an error occurred with the form you submitted. ";
        echo "These errors appear below <br><br>";
        echo $error . "<br><br>";
        echo "Please go back and fix the errors: <a href='http://www.blackdawn-rp.com/apply.php'>Application Form</a>";
        die();
    }


    $name = $_POST['contact_name'];
    $email_from = $_POST['contact_email'];
    $message = $_POST['contact_message'];
    
    $error_message = "";
    $email_regex = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    
    if(!preg_match($email_regex, $email_from)) {
        $error_message .= "The email address provided does not appear to be valid.<br>";
    }
    
    if(strlen($message) < 2) {
        $error_message .= "Please enlighten us as to why you were interested in applying for Blackdawn.";
    }
    
    if(strlen($error_message) > 1) {
        died($error_message);
    }
    
    $email_message = "Form Details Below.\n\n";
    
    //Clean string of the following
    function clean_string($string) {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }
    
    $email_message .= "Name: " .clean_string($name) . "\n";
    $email_message .= "Email: " . $email_from . "\n";
    $email_message .= "Message: " .clean_string($message) . "\n";
    $email_message = wordwrap($email_message, 70);
    
    $headers = 'From: ' . $email_from . "\n" . 'Reply-To: ' . $email_from . "\n" . 'X-Mailer: PHP/' . phpversion();
    mail($email_to, $email_subject, $email_message, $headers);
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
          <h3 class="mt-4 mb-3">Contact
            <small></small>
          </h3>
    
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a href="contact.php">Contact</a>
            </li>
            <li class="breadcrumb-item active">Apply</li>
          </ol>
      
          <div>
            <h1 class="display-1">Thank you!</h1>
            <p>Your message has been received!</p>
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
