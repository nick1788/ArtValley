<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Load PHPMailer library
        // Load form validation library
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('art_view/contact');
    }

    
}
