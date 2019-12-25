<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

      <span id="msg">
         Bem-vindo, <?php echo $this->session->userdata('nome'); ?>
         <a href="<?php echo site_url('login/logout');?>">Log Out</a> <br /> <br />
      </span>

      <aside>
         <img src="<?php echo base_url('logo.png'); ?>" height="50%" width="50%" style="padding-left: 30px" />
         <ul>
            <!--Menu de Acesso para Médicos-->
            <?php if($this->session->userdata('nivel') === '1'):?>
            <li>
               <a href="<?php echo base_url('index.php/consulta/listar'); ?>"><i class="material-icons"> view_agenda </i>
               Visualizar Consultas de Hoje</a>
            </li>
            <li>
               <a href="<?php echo base_url('index.php/usuario/listar'); ?>"><i class="material-icons"> view_list </i>
               Listar Usuários</a>
            </li>
            
            <!--Menu de Acesso para Pacientes-->
            <?php elseif($this->session->userdata('nivel') === '2'):?>
            <li>
               <a href="<?php echo base_url('index.php/consulta/agendar'); ?>"> <i class="material-icons"> schedule </i> 
                  Agendar Nova Consulta
               </a>
            </li>
            <li>
               <a href="<?php echo base_url('index.php/consulta/listar'); ?>"> <i class="material-icons"> pageview </i> 
                  Histórico de Consultas
               </a>
            </li>
            <?php endif;?>
         </ul>
      </aside>