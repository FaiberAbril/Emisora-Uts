<?php
class Mul_model extends CI_Model {

          public function crear($ruta,$cat){     
         
          $da = array(
            'mul_ruta' => $ruta,
            'mul_cat_multimedia' => $cat,
         );  
            
       $this->db->insert('multimedia',$da);

    }
    
     public function ultimo() {
       $this->db->select('mul_codmultimedia');
        $this->db->from('multimedia');
        $this->db->order_by("mul_codmultimedia","desc");
        $this->db->limit(1);
        $q=$this->db->get();       
        return $q->result();        
    }
    
    
}
