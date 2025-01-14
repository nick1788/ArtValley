<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_login_model');
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('admin/Admin_form_view.php');
    }

    public function login()
    {
        if ($this->input->post()) {
            $Email_id = $this->input->post('Email_id');
            $password = $this->input->post('password');

            // Verify the admin credentials
            $admin = $this->Admin_login_model->verifyAdmin($Email_id, $password);
            if ($admin) {
                // Credentials are correct
                $this->session->set_userdata('admin_logged_in', true);
                $this->session->set_userdata('admin_data', $admin);

                $this->session->set_flashdata('success', 'Login successful.');
                redirect('admin');
            } else {
                // Invalid credentials
                $this->session->set_flashdata('error', 'Invalid credentials');
                redirect('admin/Admin_Login');
            }
        }
    }


    public function logout()
    {
        $this->session->unset_userdata('admin_logged_in');
        $this->session->unset_userdata('admin_data');
        $this->session->set_flashdata('success', 'Logged out successfully.');
        redirect('admin/Admin_Login');
    }
}
