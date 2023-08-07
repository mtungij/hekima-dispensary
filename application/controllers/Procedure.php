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
            "user_id" => $this->input->post('user_id'),
            "name" => $this->input->post('procedure'),
        );

        $this->ProcedureModel->create_procedure($data);

        redirect('procedure');
    }

    public function delete($id) {
        $this->ProcedureModel->delete_procedure($id);

        redirect('procedure');
    }


}