<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Medico extends CI_Controller {
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
      if ($this->session->userdata('nivel') === '1') {
         //$dados['pacientes'] = $this->consulta->getConsultasHoje();
         redirect('consulta/listar');

         //$this->load->view('listar_consultas', $dados);
      } else {
         echo "Acesso Restrito";
      }
      $this->load->view('footer');
   }
}