<?php 

class Setting extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('SettingModel');
    }


    public function get_setting()

    {
           $setting=$this->SettingModel->getting_setting();

           echo "<pre>"; 
           print_r($setting);
           echo "<pre>"; 
             exit;
          //  $this->load->view('patient/demo');
    

    }

    public function general_setting()
    {

        $config['upload_path']          = './public/uploads/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';

        $this->load->library('upload', $config);

        $uplaod = $this->upload->do_upload('logo_url');
        $error = $this->upload->display_errors();

        if ( ! $uplaod && preg_match_all("/You did not select a file to upload./i", $error) < 1 ){
            $this->session->set_flashdata('uploadError', $error);
            return redirect('staff');
        } else {
       $data = $this->upload->data();
       $data = array(
        'center_name' => $this->input->post('center_name'),
        'address' => $this->input->post('address'),
        'phone_number' => $this->input->post('phone_number'),
        'email' => $this->input->post('email'),
        'descount' => $this->input->post('descount'),
        'footer' => $this->input->post('footer'),
        'logo_url' => "public/uploads/" . $data["file_name"],
    );
    
       $success =$this->SettingModel->create_setting($data);

    //    echo "<pre>";
    //    print_r($success);
    //    echo "<pre>";
    //      exit;

       if ($success) {
            $this->session->set_flashdata('status', 'data inserted successfully');
            
            $this->load->view('setting/general_setting');
  }

    }
    }

    

}
