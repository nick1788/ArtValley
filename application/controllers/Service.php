<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Service extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();

		$this->load->model('Service_model');
	}
	public function index()
	{
		$data['services'] = $this->Service_model->get_all_data();


		// echo "<pre>";
		// print_r($data);
		// exit;

		$this->load->view('art_view/service', $data);
	}
}
