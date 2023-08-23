<?php 
class SettingModel extends CI_Model
{

   
public function create_setting($data)
{
   $this->db->insert('setting',$data);
   return true;

}



public function getting_setting()

{

       $q=$this->db->query("SELECT * FROM setting");
       return $q->result();  
    
       
       

}

}