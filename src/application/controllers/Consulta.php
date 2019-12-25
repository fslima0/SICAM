<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consulta extends CI_Controller {
  function __construct() {
   parent::__construct();
   // Volta a página principal caso usuário não esteja logado
   if ($this->session->userdata('logged_in') !== TRUE) {
      redirect('login');
   }
   $this->load->model('consultas_model', 'consulta');

   // Carrega o header da pagina automaticamente
   $this->load->view('header');
   $this->load->view('painel');
  }
  
   function agendar() {
      // Agenda consulta
      if ($this->session->userdata('nivel') === '2') {
         $this->load->view('agendar_consulta');
      } else {
         echo "Área Restrita";
      }
      $this->load->view('footer');
   }

   function salvar() {
      // Valida dados do usuário ao agendar uma consulta
      if ($this->session->userdata('nivel') === '2') {
         $dados['atividade'] = $this->input->post('atividade');
         $dados['data'] = $this->input->post('data');
         $dados['finalidade'] = $this->input->post('finalidade');
         $dados['usuario_id'] = $this->session->userdata('id');

         if ($this->input->post('id') != NULL) {
            $this->consulta->update($dados, $this->input->post('id'));
            $this->session->set_flashdata('msg','Consulta atualizada com sucesso.');
         } else {
            $this->consulta->insert($dados);
            $this->session->set_flashdata('msg','Consulta agendada com sucesso.');
         }
         redirect('Paciente');
      }
   }

   function listar() {
      // Lista de consulta customizada na área principal dependendo do tipo do Usuário
      $nivel = $this->session->userdata('nivel');
      $id = $this->session->userdata('id');

      switch ($nivel) {
         case '1':
            $dados['pacientes'] = $this->consulta->getConsultasHoje();
            $this->load->view('listar_consultas', $dados);
            break;
         case '2':
            $dados['pacientes'] = $this->consulta->getConsultasbyPaciente($id);
            $this->load->view('listar_consultas', $dados);
            break;
         default:
            echo "Acesso Restrito";
            break;
      }
      $this->load->view('footer');
   }

   function apagar($id=NULL) {
      if ($id == NULL) {
			echo "Não foi possível deletar o registro";
      } else {
         $this->consulta->delete($id);
         $this->session->set_flashdata('msg','Consulta deletado com sucesso.');
         
         redirect('Consulta/listar');
      }
   }

   function editar($id=NULL) {
      if ($id == NULL) {
         echo "Não foi possível editar o registro";
      } else {
         $query = $this->consulta->getConsultaByID($id);

         $dados['consulta'] = $query;

         $this->load->view('editar_consulta', $dados);
         $this->load->view('footer');
      }
   }

   function detalhar($id=NULL) {
      if ($id == NULL) {
         echo "Não foi possível detalhar o registro";
      } else {
         $query = $this->consulta->getConsultaByID($id);

         $dados['paciente'] = $query;
         $nome = $this->consulta->getNome($id);
         

         $merge = array_merge($dados, $nome);
         $this->load->view('detalhar_consulta', $merge);
         $this->load->view('footer');
      }
   }
}