<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Blog_model');

        $this->load->library('session');

        if (!$this->session->userdata('admin_logged_in')) {
            redirect('admin/Admin_Login');
        }
    }

    public function display_data()
    {
        $data['services'] = $this->Blog_model->get_all_data();
        $this->load->view('admin/Blog_view/view', $data);
    }



    public function add()
    {
        if ($this->input->post()) {
            $this->load->library('upload');
            $config['upload_path'] = './upload/blog_images/';
            $config['allowed_types'] = '*';
            $config['max_size'] = 1024 * 10;
            $config['overwrite'] = false;
            $this->upload->initialize($config);

            $data = array(
                'Blog_title' => $this->input->post('Blog_title'),
                'Blog_main_content' => $this->input->post('Blog_main_content'),
                'Blog_detail_content' => $this->input->post('Blog_detail_content')
            );

            if ($this->upload->do_upload('Blog_Img')) {
                $upload_data = $this->upload->data();
                $data['Blog_Img'] = $upload_data['file_name'];
            } else {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
            }

            $result = $this->Blog_model->add($data);

            if ($result) {
                $this->session->set_flashdata('success', 'Data inserted successfully.');
            } else {
                $this->session->set_flashdata('error', 'Error occurred while inserting data.');
            }

            redirect('admin/Blog/display_data');
        } else {
            $this->load->view('admin/Blog_view/add.php');
        }
    }





    public function edit($id = null)
    {
        if ($this->input->post()) {
            $id = $this->input->post('id');
    
            // Collect form data
            $data = array(
                'Blog_title' => $this->input->post('Blog_title'),
                'Blog_main_content' => $this->input->post('Blog_main_content'),
                'Blog_detail_content' => $this->input->post('Blog_detail_content'),
            );
    
            // Check if a new image has been uploaded
            if (!empty($_FILES['Blog_Img']['name'])) {
                $upload_path = 'uploads/blog_images/';
                $config['upload_path'] = $upload_path;
                $config['allowed_types'] = '*';
                $config['max_size'] = 10240; // 10 MB
                $this->load->library('upload', $config);
    
                if ($this->upload->do_upload('Blog_Img')) {
                    // Get uploaded image data
                    $upload_data = $this->upload->data();
                    $data['Blog_Img'] = $upload_data['file_name'];
    
                    // Delete the old image if a new one has been uploaded successfully
                    $old_image_path = $upload_path . $this->input->post('old_Blog_Img');
                    if (file_exists($old_image_path)) {
                        unlink($old_image_path);
                    }
                } else {
                    // Display upload error and redirect to edit page
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    redirect('admin/Blog_1_Admin/edit/' . $id);
                }
            }
    
            // Update blog data in the database
            $result = $this->Blog_model->edit($id, $data);
    
            // Set flash data based on the result and redirect
            if ($result) {
                $this->session->set_flashdata('success', 'Blog updated successfully.');
            } else {
                $this->session->set_flashdata('error', 'Error occurred while updating the blog.');
            }
    
            redirect('admin/Blog_1_Admin/display_data');
        } else {
            // Load the edit view with the current blog data
            $data['service'] = $this->Blog_model->get_service_by_id($id);
            $this->load->view('admin/Blog_view/edit.php', $data);
        }
    }
    




    public function delete($id = null)
    {
        if ($id === null) {
            $this->session->set_flashdata('error', 'Invalid ID.');
            redirect('admin/Blog/display_data');
        }

        $result = $this->Blog_model->delete($id);

        if ($result) {
            $this->session->set_flashdata('success', 'Data deleted successfully.');
        } else {
            $this->session->set_flashdata('error', 'Error occurred while deleting data.');
        }

        redirect('admin/Blog/display_data');
    }
}


    
                    // echo "<pre>";
                    // print_r($_FILES);
                    // exit;