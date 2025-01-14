<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {

	public function __construct()
    {
        parent::__construct();

        $this->load->model('Project_model');

    }
	public function index()
	{
        $data['project'] = $this->Project_model->get_all_data();

		// echo "<pre>";
		// print_r($data);
		// exit();

		$this->load->view('art_view/projects',$data);
	}
}
