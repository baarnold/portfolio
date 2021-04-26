<?php # Sript 10.3 - edit_user.php
// Script edits selected user information
require('includes/config.inc.php');
$page_title = 'Edit Selected User';
include('includes/header.php');
require(MYSQL);

echo '<h1>Edit User</h1>';

if (isset($_SESSION['user_id']) && $_SESSION['user_level'] == 1) { ?>
    <div class="row justify-content-center">
      <div class="col-lg-4 mb-4">
        <div class="card h-10">
          <h4 class="card-header">Phone PIN</h4>
          <div class="card-body">
            <p class="card-text">
              <h1 id="pin">0000</h1>
            </p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-blackdawn" id="generatePin">Generate One-Time Pin</a>
          </div>
        </div>
      </div>
    </div>
<?php } else {
    echo 'You do not have permissions to view this page.';
} 

include('includes/pin-display.php'); ?>

<script>
    var pinNum = '----';
    document.getElementById('pin').textContent = pinNum;
    
    $("#generatePin").click(function() {
        pinNum = (Math.random()).toString().substring(2, 6);

        document.getElementById('pin').textContent = pinNum;
        $.post("includes/pin-display.php", {pin: pinNum});
        return false;
    })
</script>