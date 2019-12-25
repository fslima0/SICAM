<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

      <section>
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="#">Início</a></li>
               <li class="breadcrumb-item active" aria-current="page">Detalhes da Consulta</li>
            </ol>
         </nav>

         <table class="table table-hover">
            <thead>
               <tr>
                  <th scope="col"> Nome Completo </th>
                  <th scope="col"> Data da Consulta</th>
                  <th scope="col"> Finalidade</th>
               </tr>
            </thead>
            <?php
               foreach($paciente as $paciente) {
                  echo '<tbody>';
                     echo '<tr>';
                        echo '<td>'.$nome. '</td>';
                        echo '<td>'.$paciente->data.'</td>';
                        echo '<td>'.$paciente->finalidade.'</td>';
                        //echo '<td>';
                           //echo '<a href="editar/'.$paciente->id.'" class="btn btn-primary">Editar</a>';
                           //echo '<a href="apagar/'.$paciente->id.'"  class="btn btn-danger">Apagar</a>';
                           //echo '<a href="detalhar/'.$paciente->id.'"  class="btn btn-warning">Detalhes</a>';
                        //echo '</td>';
                     echo '</tr>';
               }
            ?>
            </tbody>
         </table>

      </section>