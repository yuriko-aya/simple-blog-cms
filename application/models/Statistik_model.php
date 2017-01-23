<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statistik_model extends CI_Model {
  public function __contruct() {

  }
  public function insert_stat($sesstat,$page) {
    return $this->db->insert('statistik',array('session_stats' => $sesstat, 'page' => $page));
  }
}

?>
