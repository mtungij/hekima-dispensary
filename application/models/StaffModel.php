<?php

class StaffModel extends CI_Model
{
    public function all_staff() {
        $staffs = $this->db->get('Staff')->result();
        return $staffs;
    }
    public function get_staff($data) {
        $staff = $this->db->get_where('Staff', $data)->result();
        return $staff;
   }

   public function create_staff($data) {
    $staff = $this->db->get_where('Staff', array('username'=>$data['username']))->result();
    if(count($staff) > 0) {
        return false;
    }else {
        $this->db->insert('Staff', $data);
        return true;
    }
   }
}