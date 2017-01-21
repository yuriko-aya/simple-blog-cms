<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
  public function __construct() {
    $this->load->database();
    $this->load->library('session');
  }

  public function insert_user($username,$password) {
    $hased_password = password_hash($password,PASSWORD_BCRYPT);
    $regist = array(
      'username' => $username,
      'password' => $hased_password,
    );
    return $this->db->insert('user',$regist);
  }

  public function login($inusername,$inpassword) {
    $this->db->select('password');
    $this->db->from('user');
    $this->db->where('username', $inusername);
    $hash = $this->db->get()->row('password');

    return $this->check_password($inpassword,$hash);

  }

  public function logedin($inusername) {
    $query = $this->db->get_where('user', array('username' => $inusername));
    $sess = array(
      'user_login' => 'TRUE',
      'user_username' => $query->row('username'),
      'user_level' => $query->row('level'),
    );
    return $this->session->set_userdata($sess);
  }

  private function check_password($inpassword,$hash) {
    return password_verify($inpassword, $hash);
  }


}
?>
