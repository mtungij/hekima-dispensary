<?php

class Settings extends CI_Controller

{

public function general()
{

    $this->load->view('settings/general_setting');
    
}

public function payment_method()
{

    $data=array(

        'payment_name'=>$this->input->post('payment_name'),
        'account_number'=>$this->input->post('account_number')
        
    );

    $this->load->model('SettingModel');

    $payment=$this->SettingModel->create_payment($data);

    // echo "<pre>";
    // print_r($payment);
    // echo "<pre>";
    // exit;


if ($payment===false) {
    
    $this->session->set_flashdata('userExist', 'By default CASH ACCOUNT is existed OR Account Name you are trying to create is existed try to double check Payment Accounts list  ');
    
                redirect('settings');
} else {
      $this->session->set_flashdata('registerSuccess', 'Payment Method registered successfully ');

            redirect('settings',$data);
            
}

}

public function index()

{

    $this->load->model('SettingModel');
   $method=$this->SettingModel->all_method();
   
//    echo "<pre>";
//     print_r($method);
//     echo "<pre>"; 
//     exit;

    $this->load->view('settings/payment_method',["method"=>$method]);
}

}

