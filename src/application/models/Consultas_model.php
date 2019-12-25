<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Faz conexão com a tabela consulta
class Consultas_model extends CI_Model {
   public function insert($data) {
      return $this->db->insert('consulta', $data);
   }

   public function update($data, $id) {
      $this->db->where('id', $id);

      return $this->db->update('consulta', $data);
   }

   public function delete($id) {
      $this->db->where('id', $id);
      
      return $this->db->delete('consulta');
   }
   
   public function getConsultasHoje() {
      $data = date('Y-m-d', time());

      $this->db->where('data', $data);
      $query = $this->db->get('consulta');

      return $query->result();
   }

   public function getConsultasbyPaciente($id) {
      $this->db->where('usuario_id', $id);
      $query = $this->db->get('consulta');

      return $query->result();
   }

   public function getConsultaByID($id=NULL) {
      if ($id != NULL):
        //Verifica se a ID no banco de dados
        $this->db->where('id', $id);        
        //limita para apenas um regstro    
        $this->db->limit(1);
        //pega os produto
        $query = $this->db->get("consulta");        
        //retornamos o produto
        return $query->result();   
      endif;
   }
   
   public function getNome($id=NULL) {
      $this->db->select('u.nome');    
      $this->db->from('usuario u');
      $this->db->join('consulta c', 'c.usuario_id = u.id');
      $this->db->where('c.id', $id);        

      $query = $this->db->get();   

      return $query->row_array();
   }
}