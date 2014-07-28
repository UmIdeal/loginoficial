<?php
echo '<meta charset=UTF-8>';
require_once 'includes/funcoesUteis.inc';
validaAutenticacao('frmlogin.php', 'RES');
echo '<h2> Ambiente do Usuário Restrito </h2>';
echo '<h1> Olá Sr(a). </h1>';
echo '<a href=frmAtualizar.php>Alterar Dados (perfil)</a>'.'<br />';
echo '<a href=logout.php?p=frmlogin.php><button> Logout </button></a>';