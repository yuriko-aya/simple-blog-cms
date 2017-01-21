<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('post_model');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['all_posts'] = $this->post_model->all_post(0)->result();
		$data['title'] = "Home";
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
		if($getposts) {
			$data['all_posts'] = $getposts->result();
			$data['title'] = $getposts->row('title');
			$data['sharer_links'] = $this->sharer_link();
			$this->load->view('templates/header',$data);
			$this->load->view('home',$data);
		} else {
			echo "NOT FOUND!";
		}
	}

}
