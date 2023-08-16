<?php

class DepartimentModel extends CI_Model
{
    public function get_all_departiments() {
        $departiments = $this->db->get('Departiment')->result();
        return $departiments;
    }

    public function create_departiment($data) {
        $this->db->insert('Departiment', $data);
        return true;
    }

    public function delete_departiment($id) {
        $this->db->delete('Departiment', array("departiment_id" => $id) );
        return true;
    }
}