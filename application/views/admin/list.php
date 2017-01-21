<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="box box-primary">
  <table class="table table-hover">
    <tr>
      <th>Title</th>
      <th>Action</th>
    </tr>
<?php
  foreach ($post_list as $list) {
?>
    <tr>
      <td><a href="<?php echo base_url().$type.$list->slug; ?>" target="_blank"><?php echo $list->title; ?></a></td>
      <td><a href="<?php echo base_url().'admin/delete/'.$list->slug; ?>" class="btn btn-danger">Delete <?php echo $title; ?></a> <a href="<?php echo base_url().'admin/edit/'.$list->slug; ?>" class="btn btn-info">Edit <?php echo $title; ?></a></td>
    </tr>
<?php } ?>
  </table>
</div>
