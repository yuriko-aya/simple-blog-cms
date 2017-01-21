<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_model extends CI_Model {
  public function __construct() {

  }

  public function writepost($title,$slug,$author,$content,$excerpt) {
    $contents = array(
      'title' => $title,
      'slug' => $slug,
      'author' => $author,
      'content' => $content,
      'excerpt' => $excerpt
    );
    return $this->db->insert('post',$contents);
  }

  public function getpost_id($slug) {
    $this->db->select('post_id');
    $this->db->from('post');
    $this->db->where('slug',$slug);
    return $this->db->get()->row('post_id');
  }

  public function write_postmeta($post_id,$category,$ogimage,$tags) {
    $postmeta = array(
      'post_id' => $post_id,
      'category' => $category,
      'ogimage' => $ogimage,
      'tags' => $tags
    );
    return $this->db->insert('post_meta',$postmeta);
  }

  public function all_post($offset) {
    $this->db->select('post.post_id,title,slug,author,content,excerpt,`date`,category,ogimage,tags');
    $this->db->from('post');
    $this->db->join('post_meta','post_meta.post_id = post.post_id');
    $this->db->order_by('date', 'DESC');
    return $query = $this->db->get();
  }

  public function single_post($type,$slug) {
    $this->db->select('post.post_id,title,slug,author,content,excerpt,`date`,category,ogimage,tags');
    $this->db->from($type);
    $this->db->join('post_meta','post_meta.post_id = post.post_id');
    $this->db->limit(1);
    $this->db->where('slug',$slug);
    return $query= $this->db->get();
  }

  public function post_list($type) {
    $this->db->select('title,slug');
    $this->db->from($type);
    return $query = $this->db->get();
  }

}
