<?php 
class Usuario_model extends CI_Model {
    
    public function listar() {
       $this->db->select('per_descripcion, usu_codusuario, usu_nombreusuario,usu_apellido,usu_passwd');
        $this->db->from('usuario');
        $this->db->join('perfil', 'perfil.per_codperfil = usuario.usu_per_idperfil');
        $q=$this->db->get();       
        return $q->result();        
    }
    
    public function listareditar($id) {
       $this->db->select('per_descripcion,usu_per_idperfil, usu_codusuario, usu_nombreusuario,usu_apellido,usu_passwd');
        $this->db->from('usuario');
        $this->db->where('usu_codusuario',$id);
        $this->db->join('perfil', 'perfil.per_codperfil = usuario.usu_per_idperfil');
        $q=$this->db->get();       
        return $q->result();        
    }
     
    
    public function crear($nombres,$apellidos,$contraseña,$perfil){
        $data = array(
				'usu_nombreusuario' => $nombres,
				'usu_apellido' => $apellidos,
				'usu_passwd' => $contraseña,
				'usu_per_idperfil' => $perfil,
				);  
    $this->db->insert('usuario',$data);
        
    }

    
    public function delete($usuario){       
        $this->db->where('usu_codusuario', $usuario);
        return $this->db->delete('usuario');
    }
    
    
      public function update($codigo,$nombres,$apellidos,$contraseña, $perfil) {         
          $data = array(
				'usu_nombreusuario' => $nombres,
				'usu_apellido' => $apellidos,
				'usu_passwd' => $contraseña,
				'usu_per_idperfil' => $perfil,
				);  
          
      $this->db->where("usu_codusuario", $codigo);
      $this->db->update("usuario", $data);
    }
    
 
    

    

}