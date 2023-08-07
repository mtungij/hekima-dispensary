<?php 

class Position extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('PositionModel');
    }
    public function index() {
        $positions = $this->PositionModel->get_all_positions();
        $this->load->view('positions/position', ["positions" => $positions]);
    }

    public function create() {
        $data = array(
            "name" => $this->input->post('position'),
        );

        $q = $this->PositionModel->create_position($data);
         if($q) {
            $this->session->set_flashdata('positionRegistered', 'Position is successfully registered.');
            redirect('position');
        }
    }

    public function delete($id) {
        $q = $this->PositionModel->delete_position($id);
        
         if($q) {
            $this->session->set_flashdata('positionDeleted', 'Position is successfully deleted.');
            redirect('position');
        }
    }


}