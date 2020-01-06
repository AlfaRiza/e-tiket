<?php 

class penyelenggara_model extends CI_Model{
    public function getEventbyIdUser($table, $where){
        return $this->db->get_where($table, $where)->result_array();
    }
}

?>