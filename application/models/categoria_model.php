<?php 
class Categoria_model extends CI_Model {

 public function listarcat() {
        $this->db->order_by("cat_descripcion", "asc"); 
        $this->db->from('categoria');
        $q=$this->db->get();       
        return $q->result();        
    }
    
     public function delete($idcat){       
        $this->db->where('cat_codcategoria', $idcat);
        return $this->db->delete('categoria');
    }
    
     public function listareditar($id) {
       $this->db->select('cat_codcategoria,cat_descripcion');
        $this->db->from('categoria');
        $this->db->where('cat_codcategoria',$id);
        $q=$this->db->get();       
        return $q->result();        
    }
    
    
       public function segactualizar($codigo,$nombres) {         
          $data = array(
				'cat_descripcion' => $nombres,
				);  
          
      $this->db->where("cat_codcategoria", $codigo);
      $this->db->update("categoria", $data);
    }


}
