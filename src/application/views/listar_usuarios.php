<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
   
      <section>
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="#">Início</a></li>
               <li class="breadcrumb-item active" aria-current="page">Listar Usuários</li>
            </ol>
         </nav>

         <a href="<?php echo base_url('index.php/usuario/adicionar'); ?>" class="btn btn-success mb-3">Adicionar Novo Usuário</a>

         <table class="table table-hover">
            <thead>
               <tr>
                  <th scope="col"> Usuário</th>
                  <th scope="col"> Nível</th>
                  <th scope="col"> Nome Completo </th>
                  <th scope="col"> Ações </th>
               </tr>
            </thead>
            <tbody>                  
             <?php foreach($usuarios as $usuario) { ?>
               <tr>
               <td ><?=$usuario["usuario"]?></td>
               <td ><?=$usuario["nivel"]?></td>
               <td ><?=$usuario["nome"]?></td>
               <?php
                  echo '<td>';
                     echo '<a href="editar/'.$usuario["id"].'" class="btn btn-primary">Editar</a>';
                     echo '<a href="apagar/'.$usuario["id"].'" class="btn btn-danger">Apagar</a>';
                  echo '</td>';
                  echo '</tr>';
               }
               ?>
            </tbody>
         </table>
      </section>