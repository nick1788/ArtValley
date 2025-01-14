<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Project extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Project_model');

        $this->load->library('session');

        if (!$this->session->userdata('admin_logged_in')) {
            redirect('admin/Admin_Login');
        }
    }

    // public function display_data()
    // {
    //     $data['services'] = $this->Project_model->get_all_data();


    //     $this->load->view('admin/Project_view/view', $data);
    // }


    public function display_data()
    {
        $data['project'] = $this->Project_model->get_all_data();

        // echo "<pre>";
        // print_r($data['services']);
        // echo "</pre>";

        $this->load->view('admin/Project_view/view', $data);
    }



    public function add()
    {
        if ($this->input->post()) {
            $config['upload_path'] = './upload/Project_files/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf';  // Include 'pdf'
            $config['max_size'] = 1024 * 10; // 10MB
            $config['overwrite'] = true; // Overwrite existing files with the same name

            $data = array();

            // Handle image upload
            if (!empty($_FILES['project_img']['name'])) {
                $img_name = $_FILES['project_img']['name'];
                $img_tmp = $_FILES['project_img']['tmp_name'];
                $img_ext = strtolower(pathinfo($img_name, PATHINFO_EXTENSION));

                if (in_array($img_ext, ['jpg', 'jpeg', 'png', 'gif']) && $_FILES['project_img']['size'] <= $config['max_size'] * 1024) {
                    $img_path = $config['upload_path'] . $img_name;

                    if (move_uploaded_file($img_tmp, $img_path)) {
                        $data['project_img'] = $img_name;
                    } else {
                        $this->session->set_flashdata('error', 'Failed to upload image file.');
                    }
                } else {
                    $this->session->set_flashdata('error', 'Invalid image file or file too large.');
                }
            }

            // Handle PDF upload
            if (!empty($_FILES['project_pdf']['name'])) {
                $pdf_name = $_FILES['project_pdf']['name'];
                $pdf_tmp = $_FILES['project_pdf']['tmp_name'];
                $pdf_ext = strtolower(pathinfo($pdf_name, PATHINFO_EXTENSION));

                if ($pdf_ext === 'pdf' && $_FILES['project_pdf']['size'] <= $config['max_size'] * 1024) {
                    $pdf_path = $config['upload_path'] . $pdf_name;

                    if (move_uploaded_file($pdf_tmp, $pdf_path)) {
                        $data['project_pdf'] = $pdf_name;
                    } else {
                        $this->session->set_flashdata('error', 'Failed to upload PDF file.');
                    }
                } else {
                    $this->session->set_flashdata('error', 'Invalid PDF file or file too large.');
                }
            }

            // Project title 
            $data['project_title'] = $this->input->post('project_title');

            // Insert data into the database
            if (empty($this->session->flashdata('error'))) {
                $result = $this->Project_model->add($data);

                if ($result) {
                    $this->session->set_flashdata('success', 'Data added successfully.');
                } else {
                    $this->session->set_flashdata('error', 'Error occurred while adding data.');
                }

                redirect('admin/Project/display_data');
            } else {
                redirect('admin/Project/add');
            }
        } else {
            $this->load->view('admin/Project_view/add');
        }
    }






    public function edit($id = null)
    {
        if ($this->input->post()) {
            $id = $this->input->post('id');
            $upload_path = './upload/Project_files/';
            $allowed_types = ['jpg', 'jpeg', 'png', 'gif', 'pdf'];
            $max_size = 1024 * 10; // 10MB

            $data = array();
            $upload_error = '';

            // Handle image upload
            if (!empty($_FILES['project_img']['name'])) {
                $img_name = $_FILES['project_img']['name'];
                $img_tmp = $_FILES['project_img']['tmp_name'];
                $img_ext = strtolower(pathinfo($img_name, PATHINFO_EXTENSION));

                if (in_array($img_ext, ['jpg', 'jpeg', 'png', 'gif']) && $_FILES['project_img']['size'] <= $max_size * 1024) {
                    $img_path = $upload_path . $img_name;

                    if (move_uploaded_file($img_tmp, $img_path)) {
                        $data['project_img'] = $img_name;
                    } else {
                        $upload_error = 'Failed to upload image file.';
                    }
                } else {
                    $upload_error = 'Invalid image file or file too large.';
                }
            }

            // Handle PDF upload
            if (!empty($_FILES['project_pdf']['name'])) {
                $pdf_name = $_FILES['project_pdf']['name'];
                $pdf_tmp = $_FILES['project_pdf']['tmp_name'];
                $pdf_ext = strtolower(pathinfo($pdf_name, PATHINFO_EXTENSION));

                if ($pdf_ext === 'pdf' && $_FILES['project_pdf']['size'] <= $max_size * 1024) {
                    $pdf_path = $upload_path . $pdf_name;

                    if (move_uploaded_file($pdf_tmp, $pdf_path)) {
                        $data['project_pdf'] = $pdf_name;
                    } else {
                        $upload_error = 'Failed to upload PDF file.';
                    }
                } else {
                    $upload_error = 'Invalid PDF file or file too large.';
                }
            }

            $data['project_title'] = $this->input->post('project_title');

            // Only proceed if there are no upload errors
            if (empty($upload_error)) {
                $result = $this->Project_model->edit($id, $data);

                if ($result) {
                    $this->session->set_flashdata('success', 'Data updated successfully.');
                } else {
                    $this->session->set_flashdata('error', 'Error occurred while updating data.');
                }

                redirect('admin/Project/display_data');
            } else {
                $this->session->set_flashdata('error', $upload_error);
                redirect('admin/Project/edit/' . $id);
            }
        } else {
            $data['service'] = $this->Project_model->get_service_by_id($id);
            $this->load->view('admin/Project_view/edit', $data);
        }
    }




    public function delete($id = null)
    {
        if ($id === null) {
            $this->session->set_flashdata('error', 'Invalid ID.');
            redirect('admin/Project/display_data');
        }

        $result = $this->Project_model->delete($id);

        if ($result) {
            $this->session->set_flashdata('success', 'Data deleted successfully.');
        } else {
            $this->session->set_flashdata('error', 'Error occurred while deleting data.');
        }

        redirect('admin/Project/display_data');
    }
}


    
                    // echo "<pre>";
                    // print_r($_FILES);
                    // exit;