<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
   function __construct() {
      parent::__construct();
      $this->load->model('usuarios_model');
   }

   public function index() {
      $this->load->view('header');
      $this->load->view('login_form');
      $this->load->view('footer');
   }
   
   public function auth() {
      // Funcão que o formulário de login executa
      $usuario    = $this->input->post('usuario',TRUE);
      $senha      = $this->input->post('senha',TRUE);
      $validate   = $this->usuarios_model->validar($usuario, $senha);

      if ($validate->num_rows() > 0) {
         $data  = $validate->row_array();
         $id = $data['id'];
         $nivel = $data['nivel'];
         $nome = $data['nome'];

         $sesdata = array(
               'id'        => $id,
               'nivel'     => $nivel,
               'nome'      => $nome,
               'logged_in' => TRUE
         );
         // Guarda dados do usuário em uma SESSION
         $this->session->set_userdata($sesdata);

         // Condições que redirecionam determinado usuário a uma página (Médico ou Paciente)
         // Poderia adicionar um outro nível de Administrador para gerenciar a página
         if ($nivel === '1') {
            redirect('Medico');
         } elseif ($nivel === '2') {
            redirect('Paciente'); 
         }
      } else {
            // Mensagem de erro caso usuário ou senha estejam inválido
            $this->session->set_flashdata('login_falhou','Usuario ou senha inválidos.');
            redirect('login');
      }
   }

   function logout() {
      $this->session->sess_destroy();
      redirect('login');
   }
}