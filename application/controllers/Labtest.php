<?php 

class Labtest extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('LabtestModel');
        $this->load->model('CategoryModel');
    }
    public function index() {
        $labtests = $this->LabtestModel->get_all_labtests();
        $categories = $this->CategoryModel->get_all_categories();
        $this->load->view('labtests/labtest', ["labtests" => $labtests, "categories" => $categories]);
    }

    public function create() {
        $data = array(
            "test_category_id" => $this->input->post('category_id'),
            "name" => $this->input->post('labtest'),
            "price" => $this->input->post('price')
        );

        $q = $this->LabtestModel->create_labtest($data);

         if($q) {
            $this->session->set_flashdata('labtestRegistered', 'Labtest is successfully registered.');
            redirect('labtest');
        }

    }

    public function delete($id) {
        $q = $this->LabtestModel->delete_labtest($id);
        
         if($q) {
            $this->session->set_flashdata('labtestDeleted', 'Labtest is successfully deleted.');
            redirect('labtest');
        }

    }


}