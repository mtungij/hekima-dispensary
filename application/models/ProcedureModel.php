<?php

class ProcedureModel extends CI_Model
{
    public function get_all_Procedures() {
        $procedures = $this->db->get('Procedure')->result();
        return $procedures;
    }

    public function create_procedure($data) {
        $this->db->insert('Procedure', $data);
        return true;
    }

    public function delete_procedure($id) {
        $this->db->delete('Procedure', array("procedure_id" => $id) );
        return true;
    }
}