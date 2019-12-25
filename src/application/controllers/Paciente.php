<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paciente extends CI_Controller {
  function __construct() {
   parent::__construct();
      // Volta a página principal caso usuário não esteja logado
      if ($this->session->userdata('logged_in') !== TRUE) {
         redirect('login');
      }
      // Carrega o header da página automaticamente
      $this->load->view('header');
      $this->load->view('painel');
   }
 
   public function index() {
      // Carrega se usuário logado for, de fato, Paciente
      if ($this->session->userdata('nivel') === '2') {
         redirect('consulta/listar');
      } else {
         echo "Acesso Restrito";
      }
      $this->load->view('footer');
   }
}