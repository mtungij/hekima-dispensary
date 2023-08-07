<?php

class SurgicalModel extends CI_Model
{
    public function get_all_surgicals() {
        $surgicals = $this->db->get('Surgical')->result();
        return $surgicals;
    }

    public function create_Surgical($data) {
        $this->db->insert('Surgical', $data);
        return true;
    }

    public function delete_surgical($id) {
        $this->db->delete('Surgical', array("Surgical_id" => $id) );
        return true;
    }
}