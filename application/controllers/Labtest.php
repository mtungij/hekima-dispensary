<?php 

class Labtest extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('LabtestModel');
    }
    public function index() {
        $labtests = $this->LabtestModel->get_all_labtests();
        $this->load->view('labtests/labtest', ["labtests" => $labtests]);
    }

    public function create() {
        $data = array(
            "user_id" => $this->input->post('user_id'),
            "name" => $this->input->post('labtest'),
        );

        $this->LabtestModel->create_labtest($data);

        redirect('labtest');
    }

    public function delete($id) {
        $this->LabtestModel->delete_labtest($id);

        redirect('labtest');
    }


}