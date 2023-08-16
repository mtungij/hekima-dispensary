<?php 

class procedure extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('ProcedureModel');
    }
    public function index() {
        $procedures = $this->ProcedureModel->get_all_procedures();
        $this->load->view('procedures/procedure', ["procedures" => $procedures]);
    }

    public function create() {
        $data = array(
            "price" => $this->input->post('price'),
            "name" => $this->input->post('procedure'),
        );

        $q = $this->ProcedureModel->create_procedure($data);
        
         if($q) {
            $this->session->set_flashdata('procedureRegistered', 'Procedure is successfully registered.');
            redirect('procedure');
        }

    }

    public function delete($id) {
        $q = $this->ProcedureModel->delete_procedure($id);

        if($q) {
            $this->session->set_flashdata('procedureDeleted', 'Procedure is successfully deleted.');
            redirect('procedure');
        }
    }


}