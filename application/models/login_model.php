<?php 
class Login_model extends CI_Model {
    
    public function obtener($username,$password) {
        $this->db->from('usuario');
        $this->db->where('usu_nombreusuario',$username);
        $this->db->where('usu_passwd',$password);
        $q=$this->db->get();       
        return $q->result();        
    }
    
    
    public function admin(){
        $this->db->from('usuario');
        $this->db->where('usu_per_codperfil',1);
        $q=$this->db->get();       
        return $q->result();
    }
    

}