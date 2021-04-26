<?php

    if (isset($_POST['pin'])) {
        $pin = $_POST['pin'];
    } else {
        $pin = '----';
    }

?>
<div class="row justify-content-center">
  <div class="col-lg-4 mb-4">
    <div class="card h-10">
      <h4 class="card-header">Phone PIN</h4>
      <div class="card-body">
        <p class="card-text">
          <h1 id="pinDisplay"><?php echo $pin ?></h1>
        </p>
      </div>
    </div>
  </div>
</div>

<script>
    function auto_refresh() {
        $("pinDisplay").text(<?php $pin ?>);
    }
    
    setInterval(auto_refresh, 1000);
    
    
</script>