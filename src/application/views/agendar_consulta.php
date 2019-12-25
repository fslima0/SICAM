<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

      <section>
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="#">Início</a></li>
               <li class="breadcrumb-item"><a href="#">Paciente</a></li>
               <li class="breadcrumb-item active" aria-current="page">Agendar Consulta</li>
            </ol>
         </nav>

         <form action="<?php echo base_url('index.php/consulta/salvar'); ?>" method="POST">
            <div class="form-group">
               <label>Atividade</label>
               <select class="form-control" name="atividade">
                  <option selected disabled>Selecione uma atividade</option>
                  <option value="1" >Visita ao Médico</option>
                  <option value="2" >Revisão Anual</option>
                  <option value="3" >Entrega de Exames</option>
               </select>
            </div>
            <div class="form-group">
               <label>Data da Consulta</label>
               <input class="form-control" type="date" name="data" >
            </div>
            <div class="form-group">
               <label>Finalidade</label>
               <textarea class="form-control" rows="3" name="finalidade"></textarea>
            </div>
            <button type="submit" class="btn btn-lg btn-outline-success float-right"> Agendar Consulta </button>
         </form>
      </section>

 