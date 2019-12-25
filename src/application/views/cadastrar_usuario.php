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
               <input type="text" class="form-control" name="nome" placeholder="Nome Completo" required="" autofocus="" />

               <select class="form-control" name="nivel">
                  <option value="1" >Médico</option>
                  <option value="2" >Paciente</option>
                  <option value="0" >Administrador</option>
               </select>

               <input type="text" class="form-control" name="usuario" placeholder="Usuário" required="" autofocus="" />
               <input type="password" class="form-control" name="senha" placeholder="Senha" required=""/>      
               <button class="btn btn-lg btn-success float-right" type="submit">Cadastrar Novo Usuário</button>  
            </form>
         </section>
         