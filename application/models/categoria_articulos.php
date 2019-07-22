<?php 
class Categoria_articulos extends CI_Model {

 public function listarcat() {
        $this->db->order_by("cat_descripcion", "asc"); 
        $this->db->from('categoria_articulo');
        $q=$this->db->get();       
        return $q->result();        
    }
    

}
