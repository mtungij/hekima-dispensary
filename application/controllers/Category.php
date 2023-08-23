<?php

class Category extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('CategoryModel');
    }

    public function index() {
        $categories = $this->CategoryModel->get_all_categories();
        $this->load->view('categories/category', ["categories" => $categories]);
    }

    public function create() {
        $data = array(
            "name" => $this->input->post('category')
        );
        $q = $this->CategoryModel->create_category($data);
        if($q) {
            $this->session->set_flashdata('categoryRegistered', 'Category is successflly registered.');
            redirect('category');
        }
    }

    public function delete($id) {
        $q = $this->CategoryModel->delete_category($id);
        if($q) {
            $this->session->set_flashdata('categoryDeleted', 'Category is successflly deleted.');
            redirect('category');
        }
    }
}