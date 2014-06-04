<?php
echo '<meta charset=UTF-8>';
include_once 'conexao/conecta.inc';

$nome = $_POST['nome'];
$sexo = $_POST['sexo'];
$nascimento = $_POST['nascimento'];
$tipopessoa  = $_POST['tipo_pessoa'];
$tipodocumento  = $_POST['tipo_documento'];
$numerodocumento  = $_POST['documento'];
$celular  = $_POST['celular'];
$cep  = $_POST['cep'];
$endereco  = $_POST['endereco'];
$bairro  = $_POST['bairro'];
$uf  = $_POST['uf'];
$email = $_POST['email'];
$confirmeEmail  = $_POST['email'];
$senha = $_POST['senha'];
$confirmeSenha = $_POST['senha'];
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