<?php defined('BASEPATH') OR exit('No direct script access allowed');

foreach ($all_posts as $data_post) {

?>
    <div class="main_content">
      <div class="main_title">
        <div class="cont_title"><a href="<?php echo base_url().'view/'.$data_post->slug; ?>"><?php echo $data_post->title; ?></a></div>
        <div class="cont_info"><?php echo date('M j Y g:i A', strtotime($data_post->date)).' by '.$data_post->author; ?></div>
      </div>
      <div class="cont_cont">
        <?php echo $data_post->content; ?>
      </div>
      <div class="cat_info">
        <b>CATEGORY: </b><a href="<?php echo base_url().'category/'.$data_post->category; ?>"><?php echo $data_post->category; ?></a> <b>TAGS: </b>
        <?php
        $indtags = explode(",",$data_post->tags);
        foreach ($indtags as $tag) {
          echo '<a href="'.base_url().'tag/'.$tag.'"> '.$tag.', </a>';
        }
        ?>
      </div>
      <div class="cat_info">
        <b>Share This:</b><br>
        <div class="sharer">
        <?php
          foreach ($sharer_links as $socmed => $link) {
        ?>
          <div class="sharer_link">
            <a href="<?php echo $link.urlencode(base_url().'view/'.$data_post->slug); ?>" target="_blank"><h3> <i class="icon fa fa-<?php echo $socmed; ?>"> </i></h3></a>
          </div>
        <?php
          }
        ?>
      </div>
      </div>
    </div>

<?php
}
?>
