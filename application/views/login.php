<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="login-page">
<form role="form" enctype="multipart/form-data" action="<?php echo base_url(); ?>login/dologin" method="post">
  <?php
    if(isset($error_mes)) {
      ?>
        <div class="w3-panel w3-red w3-padding w3-center"><?php echo $error_mes; ?></div>
      <?php
    }
  ?>
  <div class="form-group">
    <label for="username">username:</label>
    <input type="text" class="form-control" id="username" name="username" placeholder="nickname" required="true">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" name="pwd" required="true">
  </div>
  <button type="submit" class="btn btn-success">Login</button>
</form>
</div>
