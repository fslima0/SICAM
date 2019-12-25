<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

      <div class="wrapper">      
         <form action="<?php echo base_url('index.php/login/auth'); ?>" class="form-signin" method="POST" >       
            <h2 class="form-signin-heading">Login do Usuário</h2>
            <input type="text" class="form-control" name="usuario" placeholder="Usuário" required="" autofocus="" />
            <input type="password" class="form-control" name="senha" placeholder="Senha" required=""/>      
            <button class="btn btn-lg btn-primary btn-block" type="submit" style="border-radius: 12px;">Login</button>  
            
            <span class="badge badge-danger"><?php echo $this->session->flashdata('login_falhou'); ?></span>

         </form>
      </div>
         