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
            "user_id" => $this->input->post('user_id'),
            "name" => $this->input->post('position'),
        );

        $this->PositionModel->create_position($data);

        redirect('position');
    }

    public function delete($id) {
        $this->PositionModel->delete_position($id);

        redirect('position');
    }


}