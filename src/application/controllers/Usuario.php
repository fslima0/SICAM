<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {
  function __construct() {
   parent::__construct();
      // Volta a página principal caso usuário não esteja logado
      if ($this->session->userdata('logged_in') !== TRUE) {
         redirect('login');
      }
      $this->load->model('usuarios_model', 'usuario');

      // Carrega o header da página automaticamente
      $this->load->view('header');
      $this->load->view('painel');
   }

   function adicionar() {
      // Adiciona novo usuário se usuário logado for Médico ou Administrador
      if ($this->session->userdata('nivel') === '1') {
         $this->load->view('cadastrar_usuario');
      } else {
         echo "Acesso Restrito";
         redirect('Usuario/listar');
      }
      $this->load->view('footer');
   }

   function listar() {
      $dados['usuarios'] = $this->usuario->selectAll();

      $this->load->view('listar_usuarios', $dados);
      $this->load->view('footer');
   }

   function salvar() {
      // Executa se usuário for Médico ou Administrador
      if ($this->session->userdata('nivel') === '1') {
         $dados['nome'] = $this->input->post('nome');
         $dados['usuario'] = $this->input->post('usuario');
         $dados['senha'] = $this->input->post('senha');
         $dados['nivel'] =  $this->input->post('nivel');

         if ($this->input->post('id') != NULL) {
            $this->usuario->update($dados, $this->input->post('id'));
            $this->session->set_flashdata('msg','Usuario atualizada com sucesso.');
         } else {
            $this->usuario->insert($dados);
            $this->session->set_flashdata('msg','Consulta agendada com sucesso.');
         }
         redirect("Medico");
      } else {
         echo "Acesso Restrito";
      }
   }
   function apagar($id=NULL) {
      if ($id == NULL) {
			echo "Não foi possível deletar o registro";
      } else {
         $this->usuario->delete($id);
         $this->session->set_flashdata('msg','Usuário deletado com sucesso.');
         
         redirect('Usuario/listar');
      }
   }

   function editar($id=NULL) {
      $query = $this->usuario->getUsuarioByID($id);

      $dados['usuario'] = $query;

      $this->load->view('editar_usuario', $dados);   
      $this->load->view('footer');

   }
}