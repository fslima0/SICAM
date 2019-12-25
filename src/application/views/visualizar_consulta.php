<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
      <section>
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="#">Início</a></li>
               <li class="breadcrumb-item active" aria-current="page">Visualizar Consulta</li>
            </ol>
         </nav>

         <table class="table table-bordered">
            <thead>
               <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nome do Paciente</th>
                  <th scope="col">Data da Consulta</th>
                  <th scope="col">Finalidade</th>
               </tr>
            </thead>
            <?php
               $contador = 0;
               foreach($paciente as $paciente) {
                  echo '<tbody>';
                     echo '<tr>';
                        echo '<td>'.$paciente->id.'</td>';
                        echo '<td>'.$this->session->userdata('nome').'</td>';
                        echo '<td>'.$paciente->data.'</td>';
                        echo '<td>'.$paciente->finalidade.'</td>';
                     echo '</tr>';
                     $contador++;
               }
            ?>
            </tbody>
         </table>
         Total de registros: <?php echo $contador; ?>
      </section>