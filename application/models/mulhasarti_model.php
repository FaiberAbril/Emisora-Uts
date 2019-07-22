<?php
class mulhasarti_model extends CI_Model {

    
    
    
   public function crearhas($mul,$cat){
        $data = array(
            'art_idmultimedia' => $mul,
            'art_idarticulo' => $cat,
			);   
        
         $this->db->insert('articulo_has_multimedia',$data);

    }
    
}
