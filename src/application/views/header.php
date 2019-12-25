<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="pt-BR">
   <head>
		<title>Sistema de Consulta e Agendamento Médico</title>
         <meta charset="utf-8">
         <meta name="description" content="Sistema de Consulta e Agendamento Médico">
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
         <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
         <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

         <style type="text/css">
            header {
               background-color: green;
               color: white;
               padding: 20px;
            }
            aside {
               float: left;
               width: 300px;
               height: 40%;
               display: inline;
            }
            section {
               padding-top: 40px;
               float: left;
               width: 55%;
               margin: 0 1.5%;
            }
            footer {
               clear: both;
            }
            html {
               min-height: 100%;
               position: relative;
            }
            body {
               background: #eee !important;
               margin-bottom: 60px;
               font-family: 'Roboto', sans-serif;
            }
            .wrapper {	
               margin-top: 80px;
               margin-bottom: 80px;
            }
            .form-signin {
               max-width: 380px;
               padding: 15px 35px 45px;
               margin: 0 auto;
               background-color: #fff;
               border: 1px solid rgba(0,0,0,0.1);  
            .form-signin-heading,
               .form-control {
                  position: relative;
                  font-size: 16px;
                  height: auto;
                  padding: 10px;
                  @include box-sizing(border-box);
                  &:focus {
                  z-index: 2;
                  }
               }
            }
            input[type="text"] {
               margin-bottom: -1px;
               border-bottom-left-radius: 0;
               border-bottom-right-radius: 0;
            }
            input[type="password"] {
               margin-top: 5px;
               margin-bottom: 20px;
               border-top-left-radius: 0;
               border-top-right-radius: 0;
            }
            #footer {
                  bottom: 0;
                  width: 100%;
                  position: absolute;
                  height: $height-footer;
                  background-color: green;
                  color: white;
                  text-align: center;
            }
            ul {
               list-style-type: none;
            }
            .breadcrumb {background: rgba(153, 201, 145, 1); }
            #msg {
               float: right;
               padding-right: 5px;
            }
            #busca {
               width: 20px;
            }
           
         </style>

   </head>
   <body>
      <header>
         <h1> SICAM - Sistema de Consulta e Agendamento Médico </h1>
      </header>