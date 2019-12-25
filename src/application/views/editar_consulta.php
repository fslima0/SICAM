<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

      <section>
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="#">Início</a></li>
               <li class="breadcrumb-item"><a href="#">Paciente</a></li>
               <li class="breadcrumb-item active" aria-current="page">Editar Consulta</li>
            </ol>
         </nav>

         <form action="<?php echo base_url('index.php/consulta/salvar'); ?>" method="POST">
            <div class="form-group">
               <label>Atividade</label>
               <select class="form-control" name="atividade" value="<?php echo $consulta[0]->atividade; ?>">
                  <option selected disabled value="">Selecione uma atividade</option>

                  <option value="1" <?php echo $consulta[0]->atividade == 1 ? 'selected="selected"' : '' ?> >Visita ao Médico</option>
                  <option value="2" <?php echo $consulta[0]->atividade == 2 ? 'selected="selected"' : '' ?> >Revisão Anual</option>
                  <option value="3" <?php echo $consulta[0]->atividade == 1 ? 'selected="selected"' : '' ?> >Entrega de Exames</option>
               </select>
            </div>
            <div class="form-group">
               <label>Data da Consulta</label>
               <input class="form-control" type="date" name="data" value="<?php echo $consulta[0]->data; ?>">
            </div>
            <div class="form-group">
               <label>Finalidade</label>
               <textarea class="form-control" rows="3" name="finalidade"><?php echo $consulta[0]->finalidade; ?></textarea>
            </div>
            <input type="hidden" name="id" value="<?php echo $consulta[0]->id; ?>" />
            <input type="hidden" name="usuario_id" value="<?php echo $consulta[0]->usuario_id; ?>">

            <button type="submit" class="btn btn-lg btn-outline-success float-right"> Atualizar Consulta </button>
         </form>
      </section>
      