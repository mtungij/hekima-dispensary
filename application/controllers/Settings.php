<?php

class Settings extends CI_Controller

{

public function general()
{

    $this->load->view('settings/general_setting');
    
}

public function payment_method()
{

 $this->load->view('settings/payment_method',);
 

}


}