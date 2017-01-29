<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->model('login_model');
    $this->load->helper('url_helper');
  }

  public function index() {
    $this->get_login();
    $data['title'] = "Login";
    $data['desc'] = "Login page";
    $this->load->view('templates/header',$data);
    $this->load->view('login',$data);
  }

  public function register() {
    $this->get_login();
    $data['title'] = "Register";
    $daa['desc'] = "Registration page";
    $this->load->view('templates/header',$data);
    $this->load->view('login',$data);
  }

  public function doregister() {
    $this->get_login();
    $password = $this->input->post('pwd');
    $username = $this->input->post('username');
    if(empty($username) || $username = NULL) {
      header('Location: '.base_url().'login/register');
    } else {
      $this->login_model->insert_user($username,$password);
      $data['title'] = "Registration success";
      $data['desc'] = "Registration success";
      $data['error_mes'] = 'User '.$this->input->post('username').' berhasil didaftarkan';
      $this->load->view('templates/header',$data);
      $this->load->view('login',$data);
    }
}

  public function dologin() {
    $this->get_login();
    $inusername = $this->input->post('username');
    $inpassword = $this->input->post('pwd');
    if($this->login_model->login($inusername,$inpassword)) {
      $this->login_model->logedin($inusername);
      header('Location: '.base_url().'admin');
    } else {
      $data['error_mes'] = "Wrong user or password";
      $data['title'] = "Login";
      $data['desc'] = "Login error";
      $this->load->view('templates/header',$data);
      $this->load->view('login',$data);
    }

  }
  public function logout() {
    session_destroy();
    header('Location: '.base_url());
  }
  private function get_login() {
    if(isset($_SESSION['user_login']) && $_SESSION['user_login'] == 'TRUE') {
      header('Location: '.base_url().'admin');
    }
  }
}
