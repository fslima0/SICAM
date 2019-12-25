<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Faz conexão com a tabela usuario (Paciente ou Médico)
class Usuarios_model extends CI_Model {
  public function insert($data) {
    return $this->db->insert('usuario', $data);
  }

  public function update($data, $id) {
    $this->db->where('id', $id);

    return $this->db->update('usuario', $data);
  }

  public function delete($id) {
    $this->db->where('id', $id);

    return $this->db->delete('usuario');
  }

  function validar($usuario, $senha) {
    $this->db->where('usuario',$usuario);
    $this->db->where('senha', $senha);
    $result = $this->db->get('usuario', 1);

    return $result;
  }

  public function selectAll() {
    $sql="select * from usuario";
    $query=$this->db->query($sql);

    return $query->result_array();
  }

  public function getUsuarioByID($id=NULL) {
      if ($id != NULL):
        //Verifica se a ID no banco de dados
        $this->db->where('id', $id);        
        //limita para apenas um regstro    
        $this->db->limit(1);
        //pega os produto
        $query = $this->db->get("usuario");        
        //retornamos o produto
        return $query->result();   
      endif;
   } 
}
