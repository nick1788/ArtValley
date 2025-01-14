<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('Blog_model');

	}
	public function index()
	{

		$data['services'] = $this->Blog_model->get_all_data();
		$this->load->view('art_view/blog',$data);
	}
}
