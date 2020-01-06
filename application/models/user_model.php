<?php 

    class user_model extends CI_Model{
        public function getEvent($table){
            return $this->db->get($table)->result_array();
        }
    }

?>