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
            "staff_id" => $this->input->post('staff_id'),
            "name" => $this->input->post('departiment'),
        );

        $q = $this->DepartimentModel->create_departiment($data);
        if($q) {
            $this->session->set_flashdata('departimentRegistered', 'Departiment was successfully registered.');
            redirect('departiment');
        }
    }

    public function delete($id) {
        $q = $this->DepartimentModel->delete_departiment($id);
        if($q) {
            $this->session->set_flashdata('departimentDeleted', 'Departiment is deleted.');
            redirect('departiment');
        }
    }


}