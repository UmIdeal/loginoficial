<?php
echo '<meta charset=UTF-8>';
include_once 'conexao/conecta.inc';

$email = $_POST['email'];
$senha = $_POST['senha'];
$nome = $_POST['nome'];
$tipoUsuario = 'RES';

$sql = "INSERT INTO usuario(
                            EMAIL_USUARIO,
                            SENHA_USUARIO,
                            NOME_USUARIO,
                            TIPO_USUARIO)";

$sql .= "VALUES('$email',
                '$senha',
                '$nome',
                '$tipoUsuario')";

     if(mysql_query($sql)){
         echo 'Usuário inserido com sucesso!';
     }else{
         echo mysql_error();
     }