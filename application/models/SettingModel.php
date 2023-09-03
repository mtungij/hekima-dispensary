<?php

class SettingModel extends CI_Model
{

   public function create_payment($data)

   {
 
    $payment = $this->db->get_where('payment_account', array('payment_name'=>$data['payment_name']))->result();
    if(count($payment) > 0) {
        return false;
    }else {
        $this->db->insert('payment_account', $data);
        return true;
    }


   }

   public function all_method()
   {

    $positions = $this->db->get('payment_account')->result();
    return $positions;
}
   
}
