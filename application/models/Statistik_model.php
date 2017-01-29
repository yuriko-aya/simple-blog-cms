<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statistik_model extends CI_Model {
  public function __contruct() {

  }
  public function insert_stat($sesstat,$page) {
    return $this->db->insert('statistik',array('session_stats' => $sesstat, 'page' => $page));
  }

  public function total_visitor() {
    return $this->db->query("SELECT DISTINCT session_stats FROM statistik")->num_rows();
  }

  public function total_view() {
    return $this->db->query("SELECT * FROM statistik")->num_rows();
  }

  public function total_post() {
    return $this->db->query("SELECT * FROM post")->num_rows();
  }

}
