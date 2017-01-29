<?php
defined('BASEPATH') OR exit('No direct script access allowed');

foreach ($all_posts as $data_post) {

?>
<div class="main_content">
  <div class="main_title">
    <div class="cont_title"><a href="<?php echo base_url().'view/'.$data_post->slug; ?>"><?php echo $data_post->title; ?></a></div>
    <div class="cont_info"><?php echo date('M j Y g:i A', strtotime($data_post->date)).' by '.$data_post->author; ?></div>
  </div>
  <div class="cont_cont">
    <?php echo $data_post->excerpt; ?>
  </div>
</div>

<?php
}
?>
