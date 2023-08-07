<?php

class PositionModel extends CI_Model
{
    public function get_all_positions() {
        $positions = $this->db->get('position')->result();
        return $positions;
    }

    public function create_position($data) {
        $this->db->insert('position', $data);
    }

    public function delete_position($id) {
        $this->db->delete('position', array("position_id" => $id) );
        
    }
}