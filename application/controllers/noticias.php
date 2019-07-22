<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Noticias extends CI_Controller {

    public function index() {
        redirect('noticias/administrar', 'location');
    }

    public function administrar() {
        $this->load->model('categoria_articulos');
        $this->load->model('Noticias_model');
        $data["combo"] = $this->categoria_articulos->listarcat();
        $data["listar"] = $this->Noticias_model->listar();
        $this->load->view('noticias/administrar_view', $data);
    }

    public function cargar_archivo() {
        
        $titulo = $this->input->post('titulo');
        $descripcion = $this->input->post('descripcion');
        $auto = $this->input->post('autor');
        $fecha = date("Y-m-d");     
       
        $this->load->model('Noticias_model');
         
        $this->Noticias_model->crear($titulo, $descripcion, $auto, $fecha);
       
        $mi_archivo = 'mi_archivo';
        $config['upload_path'] = './uploads/noticias';
        $config['file_name'] = $titulo;
        $config['allowed_types'] = "*";
        $config['max_size'] = "50000";
        $config['max_width'] = "2000";
        $config['max_height'] = "2000";
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload($mi_archivo)) {
            $data['uploadError'] = $this->upload->display_errors();
            echo $this->administrar();
            return;
        }
        $data = $this->upload->data();
        $ruta = $data['file_name'];
        $cat = 1;
        $this->load->model('Mul_model');
         
        $this->Mul_model->crear($ruta, $cat);
        $ultimul = $this->Mul_model->ultimo();
        $ultimcat = $this->Noticias_model->ultimo();
        $multimedia = $ultimul[0]->mul_codmultimedia;
        $articulo = $ultimcat[0]->art_codnoticia;
        $this->load->model('mulhasarti_model');
    
              echo "dadksd";        
        $this->mulhasarti_model->crearhas($multimedia, $articulo);

         $this->index();
        
    }

    
     public function deletenoticia() {
        $idarticulo = $this->uri->segment(3);
       
        $this->load->model('Noticias_model');
         $this->load->model('categoria_articulos');
     $this->Noticias_model->deletehas($idarticulo);
        $this->index();
    }
    
    
    
    
    
}
