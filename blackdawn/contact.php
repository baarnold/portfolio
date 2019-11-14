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
      <h3 class="mt-4 mb-3">Blackdawn Contact Information
        <small></small>
      </h3>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Contact</li>
      </ol>

      <!-- Content Row -->
      <div class="row">
        <!-- Map Column -->
        <div class="col-lg-8 mb-4">
          <!-- Embedded Google Map -->
          <img width="100%" height="100%" src="img/GilneasFlag.jpg" alt="Picture of Gilneas City and Flag"></img>
        </div>
        <!-- Contact Details Column -->
        <div class="col-lg-4 mb-4">
          <h3>Contact Details</h3>
          <p>
		    <h5>Guild Contact</h5>
            <abbr title="Email">E</abbr>:
            <a href="mailto:contact@blackdawn-rp.com">contact@blackdawn-rp.com
            </a>
          </p>
		  <p>
		    <h5>Guild Leader</h5>
			<abbr title="Name">N</abbr>: Alysdaire Blackdawn<br>
            <abbr title="Email">E</abbr>:
            <a href="mailto:contact@blackdawn-rp.com">alysdaire@blackdawn-rp.com
            </a>
          </p>
		  <p>
		    <h5>Guild Officers</h5>
			<abbr title="Name">N</abbr>: Rosemary Dusklily<br>
            <abbr title="Email">E</abbr>:
            <a href="mailto:contact@blackdawn-rp.com">rosemary@blackdawn-rp.com
			</a><br><br>
			<abbr title="Name">N</abbr>: Thaldred Kane<br>
            <abbr title="Email">E</abbr>:
            <a href="mailto:contact@blackdawn-rp.com">kane@blackdawn-rp.com
            </a><br><br>
			<abbr title="Name">N</abbr>: Ander Carmyne<br>
            <abbr title="Email">E</abbr>:
            <a href="mailto:contact@blackdawn-rp.com">carmyne@blackdawn-rp.com
			</a>
          </p>
        </div>
      </div>
      <!-- /.row -->

      <!-- Contact Form -->
      <div class="row">
        <div class="col-lg-8 mb-4">
          <h3>Send us a Message</h3>
          <form name="sentMessage" method="POST" id="contactForm" action="contact_email.php" novalidate>
            <div class="control-group form-group">
              <div class="controls">
                <label>Name:</label>
                <input type="text" class="form-control" id="contact_name" name="contact_name" required data-validation-required-message="Please enter your name.">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Email Address:</label>
                <input type="email" class="form-control" id="contact_email" name="contact_email">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Message:</label>
                <textarea rows="10" cols="100" class="form-control" id="contact_message" name="contact_message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
            <button type="submit" class="btn btn-blackdawn btn-lg btn-block" id="sendMessageButton" name="submitComment">Send Message</button>
          </form>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <?php include('includes/footer.html');?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  </body>

</html>
