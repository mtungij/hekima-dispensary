<?php

class CategoryModel extends CI_Model
{
    public function get_all_categories() {
        $categories = $this->db->get('test_category')->result();
        return $categories;
    }

    public function create_category($data) {
        $this->db->insert('test_category', $data);
        return true;
    }

    public function delete_category($id) {
        $this->db->delete('test_category', array("test_category_id" => $id) );
        return true;
    }
}