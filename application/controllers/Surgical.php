<?php 

class surgical extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('SurgicalModel');
    }
    public function index() {
        $surgicals = $this->SurgicalModel->get_all_surgicals();
        $this->load->view('surgicals/surgical', ["surgicals" => $surgicals]);
    }

    public function create() {
        $data = array(
            "user_id" => $this->input->post('user_id'),
            "name" => $this->input->post('surgical'),
        );

        $this->SurgicalModel->create_surgical($data);

        redirect('surgical');
    }

    public function delete($id) {
        $this->SurgicalModel->delete_surgical($id);

        redirect('surgical');
    }


}