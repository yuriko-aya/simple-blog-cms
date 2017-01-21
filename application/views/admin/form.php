<?php
defined('BASEPATH') OR exit('No direct script access allowed');

foreach ($form_datas as $form_data) {

?>
<div class="box box-primary">
  <div class="box-header with-border"><h3>New Post</h3></div>
    <form action="<?php echo base_url().$action; ?>" method="post" role="form">
      <div class="box-body">
        <?php
          if(isset($error_message)) {
        ?>
        <div class="alert alert-warning">
          <h4>
            <i class="icon fa fa-warning"></i>
            Error
          </h4>
          <?php echo $error_message; ?>
        </div>
        <?php
          }
        ?>
        <?php
          if(isset($success_message)) {
        ?>
        <div class="alert alert-success">
          <h4>
            <i class="icon fa fa-check"></i>
            Success
          </h4>
          <?php echo $success_message; ?>
        </div>
        <?php
          }
        ?>
        <div class="form-group">
          <label for="title">Title:</label>
          <input id="title" type="text" name="title" class="form-control" placeholder="Title" required="true" value="<?php echo $form_data->title; ?>">
        </div>
        <div class="form-group">
          <textarea id="content_body" name="content_body" class="form-control" rows="30"><?php echo $form_data->content; ?></textarea>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="category">Category:</label>
              <input id="category" type="text" name="category" class="form-control" value="<?php echo $form_data->category; ?>">
            </div>
            <div class="form-group">
              <label for="og-image">og:image:</label>
              <input id="og-image" type="text" name="og-image" class="form-control" placeholder="Link image for og:image meta" value="<?php echo $form_data->ogimage; ?>">
            </div>
            <div class="form-group">
              <label for="tags">Tags:</label>
              <textarea id="tags" name="tags" class="form-control"><?php echo $form_data->tags; ?></textarea>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="excerpt">Summary:</label>
              <textarea id="excerpt" name="excerpt" class="form-control" placeholder="Summary for sharing options, for og:description"><?php echo $form_data->excerpt; ?></textarea>
            </div>
            <button class="btn btn-info" type="submit">Submit</button>
          </div>
        </div>
      </div>
    </form>
  </div>
<?php
}
?>
