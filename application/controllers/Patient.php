<?php 

class Patient extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('PatientModel');
    }
    public function create() {

        $this->form_validation->set_rules('first_name','first_name','required');
        $this->form_validation->set_rules('middle_name','Middle name','required');
        $this->form_validation->set_rules('last_name','Last Name','required');
        $this->form_validation->set_rules('age','Age','required');
        $this->form_validation->set_rules('gender','Gender','required');
        $this->form_validation->set_rules('patient_status','Patient Status','required');
        
        
        if ($this->form_validation->run() == TRUE) {
           
                 
        $data=array(
            'first_name'=>$this->input->post('first_name'),
            'middle_name'=>$this->input->post('middle_name'),
            'last_name'=>$this->input->post('last_name'),
            'phone_number'=>$this->input->post('phone_number'),
            'age'=>$this->input->post('age'),
            'gender'=>$this->input->post('gender'),
            'patient_status'=>$this->input->post('patient_status'),
            'Escoter_name'=>$this->input->post('Escoter_name'),
            'insurancer_type'=>$this->input->post('insurancer_type'),
        );


         $patient=$this->PatientModel->get_patient($data);
          
         if ($patient === false) {
                
            $this->session->set_flashdata('userExist', 'Patient is existed ');
                $this->load->view('patient/add_patient');
      
         } else {
            $this->session->set_flashdata('registerSuccess', 'Patient registered successfully ');

            $this->load->view('patient/add_patient',$patient);
         }
         

        } else {
           
            $this->load->view('patient/add_patient');
      
        }
        
   
    }
    public function all_patient()

    {
        $patients=$this->PatientModel->get_all_patients();
          
        // echo "<pre>";
        //  print_r($patients);
        //  echo "<pre>";
        //    exit;

        $patients=$this->PatientModel->get_all_patients();

     $this->load->view('patient/patients',['patients'=>$patients]);
            
    }


}