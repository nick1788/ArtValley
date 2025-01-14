<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('Project_model');
		$this->load->model('Service_model');
	}
	public function index()
	{

		$data['project'] = $this->Project_model->get_all_data();

		$data['services'] = $this->Service_model->get_all_data();


		$this->load->view('art_view/index.php', $data);
	}
}
