<?php 
class Perfil_model extends CI_Model {   
    
    public function listar() {
        $this->db->from('perfil');
        $q=$this->db->get();       
        return $q->result();        
    }
    
}