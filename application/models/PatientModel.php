<?php


class PatientModel extends CI_Model

{

    public function get_patient($data)
    {
        $q=$this->db->get_where('patient', array('first_name' =>$data['first_name']));
        if ($q->row() !== NULL) {
         return false;
        } else {
            $this->db->insert('patient', $data);
        
        }
                
    }

    public function get_all_patients()

    {
        $q=$this->db->query("SELECT * FROM patient");
        return $q->result();  
    
        
    }
}