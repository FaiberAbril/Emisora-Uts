<?php

class Noticias_model extends CI_Model {

    public function crear($titulo, $descripcion, $auto, $fecha) {
        $data = array(
            'art_titulo' => $titulo,
            'art_descripcion' => $descripcion,
            'art_fecha' => $fecha,
            'art_autor' => $auto,
        );
        $this->db->insert('articulo', $data);
    }

    public function ultimo() {
        $this->db->select('art_codnoticia');
        $this->db->from('articulo');
        $this->db->order_by("art_codnoticia", "desc");
        $this->db->limit(1);
        $q = $this->db->get();
        return $q->result();
    }

    public function listar() {
        $query = $this->db->query('select DISTINCT art_codnoticia,art_titulo,art_descripcion,art_fecha,art_autor,mul_ruta
                 from articulo
                 INNER JOIN articulo_has_multimedia on articulo.art_codnoticia=articulo_has_multimedia.art_idarticulo
                 INNER JOIN multimedia on multimedia.mul_codmultimedia=articulo_has_multimedia.art_idmultimedia');
        return $query->result();
    }

    public function deletehas($idcat) {
           $query = $this->db->query("delete from multimedia where mul_codmultimedia=(
            select art_idmultimedia
            from articulo_has_multimedia
            where art_idarticulo=".$idcat.")");
        $this->db->where('art_codnoticia', $idcat);
        return $this->db->delete('articulo');
    }

}
