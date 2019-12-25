<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

      <section>
         <nav aria-label="breadcrumb">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Início</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Adicionar Usuário</li>
               </ol>
            </nav>
            <form action="<?php echo base_url('index.php/usuario/salvar'); ?>"  method="POST" >       
               <input type="text" class="form-control" name="nome" placeholder="Nome Completo" required="" autofocus="" value="<?php echo $usuario[0]->nome; ?>"/>

               <select class="form-control" name="nivel" value="<?php echo $usuario[0]->nivel; ?>">
                  <option value="1" >Médico</option>
                  <option value="2" >Paciente</option>
                  <option value="0" >Administrador</option>
               </select>

               <input type="text" class="form-control" name="usuario" placeholder="Usuário" required="" autofocus="" value="<?php echo $usuario[0]->usuario; ?>" />
               <input type="password" class="form-control" name="senha" placeholder="Senha" required="" value="<?php echo $usuario[0]->senha; ?>"/>
                <input type="hidden" name="id" value="<?php echo $usuario[0]->id; ?>">
      
               <button class="btn btn-lg btn-success float-right" type="submit">Atualizar Usuário</button>  
            </form>
         </section>