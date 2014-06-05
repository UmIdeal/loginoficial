<!DOCTYPE html>
<html>
    <head>
        <title> Administrador de Conteúdo </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="#">
   </head>
   <body>
<?php
require_once '../includes/funcoesUteis.inc';
validaAutenticacao('../frmlogin.php', 'ADM');
include 'conexao/conecta.inc';
?>
       <h2> Ambiente do Usuário Administrativo </h2>
       
       <a href="consultaUsuario.php"> Consulta de Usuários </a>
       
</body>
</html>