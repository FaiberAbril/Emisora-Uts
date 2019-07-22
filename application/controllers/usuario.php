<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    public function index() {
        redirect('usuario/administrar', 'location');
    }

    public function administrar() {
        $this->load->model('usuario_model');
        $this->load->model('perfil_model');
        $datos["registro"] = $this->usuario_model->listar();
        $datos["combo"] = $this->perfil_model->listar();
        $this->load->view('usuario/administrar_view', $datos);
    }

    public function crear() {
        $nombres = $this->input->post('nombres');
        $apellidos = $this->input->post('apellidos');
        $contraseña = $this->input->post('password');
        $perfil = $this->input->post('perfil');
        $this->load->model('usuario_model');
        $this->usuario_model->crear($nombres,$apellidos,$contraseña, $perfil);
        $this->administrar();
    }

    public function delete() {
        $idusuario = $this->uri->segment(3);
        $this->load->model('usuario_model');
        $this->usuario_model->delete($idusuario);
        redirect(base_url() . 'usuario/administrar', 'location');
    }

    public function datosActualizar() {
        $id = $this->uri->segment(3);
        $this->load->model('usuario_model');
        $this->load->model('perfil_model');
        $datos["combo"] = $this->perfil_model->listar();
        $datos["data"] = $this->usuario_model->listareditar($id);
        $this->load->view('usuario/editar_view', $datos);
    }
    
    
    
     public function guardar() {
        $codigo = $this->input->post('codigo');
        $nombres = $this->input->post('nombres');
        $apellidos = $this->input->post('apellidos');
        $contraseña = $this->input->post('password');
        $perfil = $this->input->post('perfil');
         print_r($nombres);
        $this->load->model('usuario_model');
        $this->usuario_model->update($codigo,$nombres,$apellidos,$contraseña, $perfil);
        $this->administrar();
    }

}
