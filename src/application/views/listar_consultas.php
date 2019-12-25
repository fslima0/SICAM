<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

      <section>
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="#">Início</a></li>
               <li class="breadcrumb-item active" aria-current="page">Consultas</li>
            </ol>
         </nav>

         <a href="<?php echo base_url('index.php/consulta/agendar'); ?>" class="btn btn-success mb-3">Agendar Nova Consulta</a>

         <table class="table table-hover">
            <thead>
               <tr>
                  <th scope="col"> # </th>
                  <th scope="col"> Data da Consulta</th>
                  <th scope="col"> Finalidade</th>
                  <th scope="col"> Ações </th>
               </tr>
            </thead>
            <?php
               $contador = 0;
               foreach($pacientes as $paciente) {
                  echo '<tbody>';
                     echo '<tr>';
                        echo '<td>'.$contador. '</td>';
                        echo '<td>'.$paciente->data.'</td>';
                        echo '<td>'.$paciente->finalidade.'</td>';
                        echo '<td>';
                           echo '<a href="editar/'.$paciente->id.'" class="btn btn-primary">Editar</a>';
                           echo '<a href="apagar/'.$paciente->id.'"  class="btn btn-danger">Apagar</a>';
                           echo '<a href="detalhar/'.$paciente->id.'"  class="btn btn-warning">Detalhes</a>';
                        echo '</td>';
                     echo '</tr>';
                     $contador++;
               }
            ?>
            </tbody>
         </table>
         Total de registros: <?php echo $contador; ?> <br />
         <span class="badge badge-success"><?php echo $this->session->flashdata('msg'); ?></span>

      </section>