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
            "name" => $this->input->post('surgical'),
            "price" => $this->input->post('price'),
        );

        $q = $this->SurgicalModel->create_surgical($data);

         if($q) {
            $this->session->set_flashdata('surgicalRegistered', 'Surgical is successfully registered.');
            redirect('surgical');
        }
    }

    public function delete($id) {
        $q = $this->SurgicalModel->delete_surgical($id);

         if($q) {
            $this->session->set_flashdata('surgicalDeleted', 'Surgical is successfully deleted.');
            redirect('surgical');
        }
    }


}