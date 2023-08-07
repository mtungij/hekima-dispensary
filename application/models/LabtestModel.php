<?php

class LabtestModel extends CI_Model
{
    public function get_all_labtests() {
        $labtests = $this->db->get('Test_subcategory')->result();
        return $labtests;
    }

    public function create_labtest($data) {
        $this->db->insert('Test_subcategory', $data);
    }

    public function delete_labtest($id) {
        $this->db->delete('Test_subcategory', array("Test_subcategory_id" => $id) );
        
    }
}