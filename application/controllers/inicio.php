<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

    public function index() {      
         $this->load->model('categoria_articulos');
        $this->load->model('Noticias_model');
        $data["combo"] = $this->categoria_articulos->listarcat();
        $data["listar"] = $this->Noticias_model->listar();
         $this->load->model('demision_model');
        $this->load->model('categoria_model');
        $this->load->model('programacion_model');
        $data["combo"] = $this->demision_model->listardia();
        $data["combodos"] = $this->categoria_model->listarcat();
        $data["lunes"] = $this->programacion_model->listarLunes();
        $data["martes"] = $this->programacion_model->listarMartes();
        $data["miercoles"] = $this->programacion_model->listarMiercoles();
        $data["jueves"] = $this->programacion_model->listarJueves();
        $data["viernes"] = $this->programacion_model->listarViernes();
        $data["sabado"] = $this->programacion_model->listarSabado();
        $data["domingo"] = $this->programacion_model->listarDomingo();
     $this->load->view('inicio_view',$data);  
     
    }
 
 
    
    public function login(){
        $username=  $this->input->post('username');
        $password =  $this->input->post('password');
        
        if($username==null){
            if($password==null){
                 redirect('', 'location');
            }
            
            
        }
        
        $this->load->model('login_model');
        $user_db=$this->login_model->obtener($username,$password); 
        if($password == $user_db[0]->usu_passwd && $username == $user_db[0]->usu_nombreusuario ){
            redirect('administrar/index');  
       }
       else{   
          redirect('', 'location');
       }
       
    }
    
    
    public function red(){
        
        redirect('', 'location');
    }
  
    
    
    
   


}


