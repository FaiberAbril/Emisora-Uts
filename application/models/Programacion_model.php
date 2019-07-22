<?php
class Programacion_model extends CI_Model {

    
    public function crear_segmento($nombres){
        $data = array('cat_descripcion' => $nombres,
				);  
        $this->db->insert('categoria',$data);
 
    }

      public function crear($idcategoria,$iddia,$inicio,$fin){         
        $data = array(
            'cat_codcategoria' => $idcategoria,
            'dia_codcategoria' => $iddia,
            'hora_inicio' => $inicio,
            'hora_final' => $fin,
				);  
        $this->db->insert('programacion',$data);
 
    }
    
    
     public function actualizar($codigo,$idcategoria,$iddia,$inicio,$fin){         
        $data = array(
            'cat_codcategoria' => $idcategoria,
            'dia_codcategoria' => $iddia,
            'hora_inicio' => $inicio,
            'hora_final' => $fin,
				);  
        $this->db->where("pro_codprograma", $codigo);
        $this->db->update("programacion", $data);
 
    }
    


       public function listarLunes() {
       $this->db->select('pro_codprograma,cat_descripcion,dia_codcategoria,hora_inicio,hora_final');
        $this->db->from('programacion');
        $this->db->where('dia_codcategoria',1);
        $this->db->join('categoria','categoria.cat_codcategoria = programacion.cat_codcategoria');
        $this->db->order_by("hora_inicio","asc");
        $q=$this->db->get();       
        return $q->result();        
    }
    
       public function listarMartes() {
       $this->db->select('pro_codprograma,cat_descripcion,dia_codcategoria,hora_inicio,hora_final');
        $this->db->from('programacion');
        $this->db->where('dia_codcategoria',2);
        $this->db->join('categoria','categoria.cat_codcategoria = programacion.cat_codcategoria');
          $this->db->order_by("hora_inicio","asc");
        $q=$this->db->get();       
        return $q->result();        
    }
    
    
       public function listarMiercoles() {
       $this->db->select('pro_codprograma,cat_descripcion,dia_codcategoria,hora_inicio,hora_final');
        $this->db->from('programacion');
        $this->db->where('dia_codcategoria',3);
        $this->db->join('categoria','categoria.cat_codcategoria = programacion.cat_codcategoria');
          $this->db->order_by("hora_inicio","asc");
        $q=$this->db->get();       
        return $q->result();        
    }

    
        public function listarJueves() {
       $this->db->select('pro_codprograma,cat_descripcion,dia_codcategoria,hora_inicio,hora_final');
        $this->db->from('programacion');
        $this->db->where('dia_codcategoria',4);
        $this->db->join('categoria','categoria.cat_codcategoria = programacion.cat_codcategoria');
        $this->db->order_by("hora_inicio","asc");
        $q=$this->db->get();       
        return $q->result();        
    }
    
        public function listarViernes() {
       $this->db->select('pro_codprograma,cat_descripcion,dia_codcategoria,hora_inicio,hora_final');
        $this->db->from('programacion');
        $this->db->where('dia_codcategoria',5);
        $this->db->join('categoria','categoria.cat_codcategoria = programacion.cat_codcategoria');
          $this->db->order_by("hora_inicio","asc");
        $q=$this->db->get();       
        return $q->result();        
    }
    
        public function listarSabado() {
       $this->db->select('pro_codprograma,cat_descripcion,dia_codcategoria,hora_inicio,hora_final');
        $this->db->from('programacion');
        $this->db->where('dia_codcategoria',6);
        $this->db->join('categoria','categoria.cat_codcategoria = programacion.cat_codcategoria');
          $this->db->order_by("hora_inicio","asc");
        $q=$this->db->get();       
        return $q->result();        
    }
    
        public function listarDomingo() {
       $this->db->select('pro_codprograma,cat_descripcion,dia_codcategoria,hora_inicio,hora_final');
        $this->db->from('programacion');
        $this->db->where('dia_codcategoria',7);
        $this->db->join('categoria','categoria.cat_codcategoria = programacion.cat_codcategoria');
        $this->db->order_by("hora_inicio","asc");
        $q=$this->db->get();       
        return $q->result();        
    }
    

    
     public function delete($idcat){       
        $this->db->where('pro_codprograma', $idcat);
        return $this->db->delete('programacion');
    }
    
    
      public function capturar($idact){       
        $this->db->select('pro_codprograma,cat_codcategoria,dia_codcategoria,hora_inicio,hora_final');
        $this->db->from('programacion');
        $this->db->where('pro_codprograma',$idact);
        $q=$this->db->get();  
        return $q->result();   
    }
    
    
    
    

    
}
