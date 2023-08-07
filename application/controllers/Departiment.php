<?php 

class Departiment extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('DepartimentModel');
    }
    public function index() {
        $departiments = $this->DepartimentModel->get_all_departiments();
        $this->load->view('departiments/departiment', ["departiments" => $departiments]);
    }

    public function create() {
        $data = array(
            "user_id" => $this->input->post('user_id'),
            "name" => $this->input->post('departiment'),
        );

        $this->DepartimentModel->create_departiment($data);

        redirect('departiment');
    }

    public function delete($id) {
        $this->DepartimentModel->delete_departiment($id);

        redirect('departiment');
    }


}