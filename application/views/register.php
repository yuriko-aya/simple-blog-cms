<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="login-page">
<form role="form" enctype="multipart/form-data" action="<?php echo base_url(); ?>login/doregister" method="post">
  <div class="form-group">
    <label for="username">username:</label>
    <input type="text" class="form-control" id="username" name="username" placeholder="nickname" required="true">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" name="pwd" required="true">
  </div>
  <button type="submit" class="btn btn-success">Register</button>
</form>
</div>
