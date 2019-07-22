<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Programacion extends CI_Controller {

    public function index() {
        redirect('programacion/administrar', 'location');
    }

    public function administrar() {
        $this->load->model('demision_model');
        $this->load->model('categoria_model');
        $this->load->model('programacion_model');
        $datos["combo"] = $this->demision_model->listardia();
        $datos["combodos"] = $this->categoria_model->listarcat();
        $datos["lunes"] = $this->programacion_model->listarLunes();
        $datos["martes"] = $this->programacion_model->listarMartes();
        $datos["miercoles"] = $this->programacion_model->listarMiercoles();
        $datos["jueves"] = $this->programacion_model->listarJueves();
        $datos["viernes"] = $this->programacion_model->listarViernes();
        $datos["sabado"] = $this->programacion_model->listarSabado();
        $datos["domingo"] = $this->programacion_model->listarDomingo();
        $this->load->view('programacion/administrar_view', $datos);
    }
    
    
    

    public function admin() {
        $this->load->model('categoria_model');
        $datos["listar"] = $this->categoria_model->listarcat();
        $this->load->view('programacion/seg_view', $datos);
    }

    public function deleteseg() {
        $idcat = $this->uri->segment(3);
        $this->load->model('categoria_model');
        $this->categoria_model->delete($idcat);
        redirect(base_url() . 'programacion/admin', 'location');
    }
    
     public function deleteprograma() {
        $idcat = $this->uri->segment(3);
        $this->load->model('programacion_model');
        $this->programacion_model->delete($idcat);
        redirect(base_url() . 'programacion/administrar', 'location');
    }


    public function segmento() {
        $nombreseg = $this->input->post('nombre');
        $this->load->model('programacion_model');
        $this->programacion_model->crear_segmento($nombreseg);
        $this->admin();
    }

    public function crear() {
        $idcategoria = $this->input->post('perfil');
        $iddia = $this->input->post('dia');
        $inicio = $this->input->post('horaincio');
        $fin = $this->input->post('horafin');
        $this->load->model('programacion_model');
        $this->programacion_model->crear($idcategoria, $iddia, $inicio, $fin);
        $this->administrar();
    }

    public function segActualizar() {
        $idcat = $this->uri->segment(3);
        $this->load->model('categoria_model');
        $datos['data'] = $this->categoria_model->listareditar($idcat);
        $this->load->view('programacion/segactualizar_view', $datos);
    }

    public function segmentoac() {
        $codigo = $this->input->post('codigo');
        $nombres = $this->input->post('nombre');
        $this->load->model('categoria_model');
        $this->categoria_model->segactualizar($codigo, $nombres);
        $this->admin();
    }
    
    
     public function programacionACtu() {
         $idactulizar = $this->uri->segment(3);
         $this->load->model('programacion_model');
         $this->load->model('demision_model');
         $this->load->model('categoria_model');
         $data["datos"]=$this->programacion_model->capturar($idactulizar);
         $data["combo"] = $this->demision_model->listardia();
         $data["combodos"] = $this->categoria_model->listarcat();
         $this->load->view('programacion/Actualizar_view',$data);
    }
    
     public function actualizar(){
        $idcategoria = $this->input->post('perfil');
        $iddia = $this->input->post('dia');
        $inicio = $this->input->post('horaincio');
        $fin = $this->input->post('horafin');
        $codigo = $this->input->post('codigo');
        $this->load->model('programacion_model');
        $this->programacion_model->actualizar($codigo,$idcategoria, $iddia, $inicio, $fin);
        $this->administrar();
    }

}
