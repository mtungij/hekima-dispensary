<?php

class LabtestModel extends CI_Model
{
    public function get_all_labtests() {
        $labtests = $this->db->select('test_subcategory_id, ts.name AS subcategory_name, tc.name AS category_name, price')
                           ->from('test_subcategory ts')
                           ->join('test_category tc', 'ts.test_category_id = tc.test_category_id')
                           ->get()
                    ->result();
        return $labtests;
        
    }

    public function create_labtest($data) {
        $this->db->insert('Test_subcategory', $data);
        return true;
    }

    public function delete_labtest($id) {
        $this->db->delete('Test_subcategory', array("Test_subcategory_id" => $id) );
        return true;
    }
}