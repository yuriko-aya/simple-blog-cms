<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('post_model');
		$this->load->model('statistik_model');
		if(!isset($_SESSION['statistic']) or empty($_SESSION['statistic'])) {
			$_SESSION['statistic'] = dechex(rand(0x000000, 0xFFFFFF));
		}
	}

	public function index()
	{
		$this->statistik_model->insert_stat($_SESSION['statistic'],'home');
		$data['all_posts'] = $this->post_model->all_post(0)->result();
		$data['title'] = "Home";
		$data['desc'] = "Selamat datang di web-nya Ahmad 'AYA' Sanusi. Sebuah web log yang berisi apa saja hal yang penulis sukai, mulai dari linux, web development, Anime, dan Manga";
		$data['ogimage'] = "https://sanusi.me/ss.png";
		$data['sharer_links'] = $this->sharer_link();
		$this->load->view('templates/header',$data);
		$this->load->view('home',$data);
	}

	private function sharer_link() {
		$socmed = array(
			'facebook' => 'https://www.facebook.com/sharer.php?u=',
			'google-plus' => 'https://plus.google.com/share?url=',
			'twitter' => 'https://twitter.com/intent/tweet?url=',
			'pinterest' => 'https://pinterest.com/pin/create/bookmarklet/?url=',
			'linkedin' => 'https://www.linkedin.com/shareArticle?url=',
			'reddit' => 'https://reddit.com/submit?url='
		);
		return $socmed;
	}

	public function view($slug) {
		$getposts = $this->post_model->single_post('post',$slug);
		if(!empty($getposts->row('title')) OR $getposts->row('title') != NULL) {
			$data['all_posts'] = $getposts->result();
			$data['title'] = $getposts->row('title');
			$data['desc'] = $getposts->row('excerpt');
			$data['ogimage'] = $getposts->row('ogimage');
			$this->statistik_model->insert_stat($_SESSION['statistic'],$data['title']);
			$data['sharer_links'] = $this->sharer_link();
			$this->load->view('templates/header',$data);
			$this->load->view('home',$data);
		} else {
			$this->notfound();
		}
	}

	public function category($slug) {
		$getcategories = $this->post_model->search_by_meta('category',$slug);
		if(!empty($getcategories->row('title')) OR $getcategories->row('title') != NULL) {
			$this->statistik_model->insert_stat($_SESSION['statistic'],$slug);
			$data['all_posts'] = $getcategories->result();
			$data['title'] = $slug;
			$data['desc'] = "All post under ".$slug." category";
			$data['ogimage'] = "https://sanusi.me/ss.png";
			$this->load->view('templates/header',$data);
			$this->load->view('search',$data);
		} else {
			$this->notfound();
		}
	}

	public function tag($slug) {
		$getcategories = $this->post_model->search_by_meta('tags',$slug);
		if(!empty($getcategories->row('title')) OR $getcategories->row('title') != NULL) {
			$this->statistik_model->insert_stat($_SESSION['statistic'],$slug);
			$data['all_posts'] = $getcategories->result();
			$data['title'] = $slug;
			$data['desc'] = "All post under ".$slug." category";
			$data['ogimage'] = "https://sanusi.me/ss.png";
			$this->load->view('templates/header',$data);
			$this->load->view('search',$data);
		} else {
			$this->notfound();
		}
	}

	public function search() {
		if($this->input->post('search') == NULL ) {
			header('Location: '.base_url());
		} else {
			$this->statistik_model->insert_stat($_SESSION['statistic'],$this->input->post('search'));
			$search_result = $this->post_model->search_engine($this->input->post('search'));
			if(empty($search_result) OR $search_result == NULL) {
				$this->notfound();
			} else {
				$data['all_posts'] = $search_result->result();
				$data['title'] = "Search result for: ".$this->input->post('search');
				$data['desc'] = "Search result for: ".$this->input->post('search');
				$data['ogimage'] = "https://sanusi.me/ss.png";
				$this->load->view('templates/header',$data);
				$this->load->view('search',$data);
			}
		}
	}

	private function notfound() {
		$data['title'] = "Error!! 410 Gone! 404 Not Found";
		$data['desc'] = "Error!! 410 Gone! 404 Not Found!";
		$data['ogimage'] = "https://sanusi.me/ss.png";
		$this->load->view('templates/header',$data);
		$this->load->view('notfound');
	}

}
