<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Service extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Service_model');

        $this->load->library('session');

        if (!$this->session->userdata('admin_logged_in')) {
            redirect('admin/Admin_Login');
        }
    }

    public function display_data()
    {
        $data['services'] = $this->Service_model->get_all_data();


        $this->load->view('admin/Service_view/view', $data);
    }



    public function add()
    {
        if ($this->input->post()) {
            $config['upload_path'] = './upload/Service_image/'; // Ensure the directory exists and is correct
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = 1024 * 10; // 10MB
            $config['overwrite'] = true;

            $data = array();

            // Handle file upload
            if (!empty($_FILES['service_img']['name'])) {
                $file_name = $_FILES['service_img']['name'];
                $file_size = $_FILES['service_img']['size'];
                $file_tmp = $_FILES['service_img']['tmp_name'];
                $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

                // Check file type and size
                if (in_array($file_ext, ['jpg', 'jpeg', 'png', 'gif']) && $file_size <= $config['max_size'] * 1024) {
                    $new_file_name = uniqid() . '.' . $file_ext;
                    $file_path = $config['upload_path'] . $new_file_name;

                    if (move_uploaded_file($file_tmp, $file_path)) {
                        $data['service_img'] = $new_file_name;
                    } else {
                        $this->session->set_flashdata('error', 'Failed to move uploaded file.');
                    }
                } else {
                    $this->session->set_flashdata('error', 'Invalid file type or file too large.');
                }
            }

            $data['service_title'] = $this->input->post('service_title');
            $data['service_dec'] = $this->input->post('service_dec');


            // Attempt to add the data to the database
            if (empty($this->session->flashdata('error'))) {
                $result = $this->Service_model->add($data);

                if ($result) {
                    $this->session->set_flashdata('success', 'Data added successfully.');
                } else {
                    $this->session->set_flashdata('error', 'Error occurred while adding data.');
                }
            }

            redirect('admin/Service/display_data');
        } else {
            $this->load->view('admin/Service_view/add');
        }
    }


    public function edit($id = null)
    {
        if ($this->input->post()) {
            $id = $this->input->post('id');
            $upload_path = './upload/Service_image/'; // Ensure the directory exists and is correct
            $allowed_types = ['jpg', 'jpeg', 'png', 'gif'];
            $max_size = 1024 * 10; // 10MB

            $data = array();
            $upload_error = '';

            // Handle file upload
            if (!empty($_FILES['service_img']['name'])) {
                $file_name = $_FILES['service_img']['name'];
                $file_size = $_FILES['service_img']['size'];
                $file_tmp = $_FILES['service_img']['tmp_name'];
                $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

                // Check file type and size
                if (in_array($file_ext, $allowed_types) && $file_size <= $max_size * 1024) {
                    $new_file_name = uniqid() . '.' . $file_ext;
                    $file_path = $upload_path . $new_file_name;

                    if (move_uploaded_file($file_tmp, $file_path)) {
                        $data['service_img'] = $new_file_name;
                    } else {
                        $upload_error = 'Failed to move uploaded file.';
                    }
                } else {
                    $upload_error = 'Invalid file type or file too large.';
                }
            }

            $data['service_title'] = $this->input->post('service_title');
            $data['service_dec'] = $this->input->post('service_dec');


            // Debugging: Print out the data to be updated
            echo "<pre>";
            print_r($data);
            echo "</pre>";

            if (empty($upload_error)) {
                $result = $this->Service_model->edit($id, $data);

                // Debugging: Print out the result of the update attempt
                echo "<pre>";
                print_r($result);
                echo "</pre>";
                // exit;

                if ($result) {
                    $this->session->set_flashdata('success', 'Data updated successfully.');
                } else {
                    $this->session->set_flashdata('error', 'Error occurred while updating data.');
                }

                redirect('admin/Service/display_data');
            } else {
                $this->session->set_flashdata('error', $upload_error);
                redirect('admin/Service/edit/' . $id);
            }
        } else {
            $data['service'] = $this->Service_model->get_service_by_id($id);
            $this->load->view('admin/Service_view/edit', $data);
        }
    }



    public function delete($id = null)
    {
        if ($id === null) {
            $this->session->set_flashdata('error', 'Invalid ID.');
            redirect('admin/Service/display_data');
        }

        $result = $this->Service_model->delete($id);

        if ($result) {
            $this->session->set_flashdata('success', 'Data deleted successfully.');
        } else {
            $this->session->set_flashdata('error', 'Error occurred while deleting data.');
        }

        redirect('admin/Service/display_data');
    }
}


    
                    // echo "<pre>";
                    // print_r($_FILES);
                    // exit;