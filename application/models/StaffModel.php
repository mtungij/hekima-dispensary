<?php

class StaffModel extends CI_Model
{
    public function all_staff() {
        $staffs = $this->db->get('Staff')->result();
        return $staffs;
    }


    public function get_single_staff($id) {
        $staff = $this->db->get_where('Staff', array("id" => $id))->row();
        return $staff;
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


   public function update_staff($data) {
        $this->db->update('Staff', $data, array("id" => $data["id"]));
        return true;
    }

     public function block_staff($status, $id) {
        $this->db->update('Staff', $status, array("id" => $id));
        return true;
    }

    public function delete_staff($id) {
        $this->db->delete('Staff', array("id" => $id));
        return true;
    }

}