<?php 
class Demision_model extends CI_Model {

 public function listardia() {
        $this->db->from('dia_emision');
        $q=$this->db->get();       
        return $q->result();        
    }

    
}
