<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->helper('url_helper');
    $this->cek_login();
    $this->load->model('post_model');
    $this->load->model('statistik_model');
  }
  private function cek_login() {
    if(!isset($_SESSION['user_login']) || empty($_SESSION['user_login']) && $_SESSION['user_level'] != 'admin') {
      header('Location: '.base_url().'login');
    }
  }
  public function index() {
    $data['title'] = "Admin Dashboard";
    $data['visitor'] = $this->statistik_model->total_visitor();
    $data['view'] = $this->statistik_model->total_view();
    $data['post'] = $this->statistik_model->total_post();
    $this->load->view('admin/header',$data);
    $this->load->view('admin/dashboard',$data);
    $this->load->view('admin/footer');
  }
  public function newpost() {
    $data['title'] = "Insert New Post";
    $data['action'] = "admin/insertpost";
    $data['form_datas'][] = (object) array(
      'title' => '',
      'content' => '',
      'category' => '',
      'ogimage' => '',
      'tags' => '',
      'excerpt' => ''
    );
    $this->load->view('admin/header',$data);
    $this->load->view('admin/form',$data);
    $this->load->view('admin/footer');
  }
  public function insertpost() {
    $title = $this->input->post('title');
    $slug = preg_replace('/[^a-z0-9]+/', '-', strtolower($title));
    $author = $this->session->user_username;
    $content = $this->input->post('content_body');
    $category = $this->input->post('category');
    $ogimage = $this->input->post('og-image');
    $tags = $this->input->post('tags');
    $excerpt = $this->input->post('excerpt');
    if ($this->post_model->writepost($title,$slug,$author,$content,$excerpt)) {
      $post_id = $this->post_model->getpost_id($slug);
      $this->post_model->write_postmeta($post_id,$category,$ogimage,$tags);
      $data['success_message'] = "Posting success";
    } else {
      $data['error_message'] = "Error posting post";
    }
    $data['title'] = "Insert Post";
    $data['action'] = "admin/insertpost";
    $data['form_datas'][] = (object) array(
      'title' => $title,
      'content' => $content,
      'category' => $category,
      'ogimage' => $ogimage,
      'tags' => $tags,
      'excerpt' => $excerpt
    );
    $this->load->view('admin/header',$data);
    $this->load->view('admin/form',$data);
    $this->load->view('admin/footer');
  }

  public function listpost() {
    $data['post_list'] = $this->post_model->post_list('post')->result();
    $data['title'] = "Posts";
    $data['type'] = "view/";
    $this->load->view('admin/header',$data);
    $this->load->view('admin/list',$data);
    $this->load->view('admin/footer');
  }

}
