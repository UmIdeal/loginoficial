<?php
echo '<meta charset=UTF-8>';
include_once 'conexao/conecta.inc'; //inclui o arquivo de configurações
include_once 'classes/Bcrypt.class.php'; 

$confirmacao = mysql_query("SELECT * FROM usuario WHERE EMAIL_USUARIO = '$email'", $db); //verifica se o login e a email conferem
  while ($row = mysql_fetch_array($confirmacao)) {
    $email = $row['email']; //adiciona a variavel $email do usuario
    $senha = $row['senha']; //adiciona a variavel $senha do usuario
}
 
$contagem = mysql_num_rows($confirmacao); //traz o resultado da pesquisa acima
 
if ( $contagem == 1 ) {
  $msg  = '<h1> Recuperação de senha </h1>' . chr(13) . chr(10);
  $msg .= 'Senha enviada em ' . date("d/m/Y") . ", os dados seguem abaixo: " . chr(13) . chr(10) . chr(10);
  $msg .= 'Email : ' . $email . chr(13) . chr(10);
  $msg .= 'Senha : ' . $senha . chr(13) . chr(10);
 
  $remetente = "umideal.speranza@gmail.com"; //remetente do email
 
  mail($email, "Recuperação de Senha",$msg,"From: $remetente"); //campos do email na ordem, email destinho (não deve ser alterada), assunto, conteudo (não deve ser alterado), remetente (também não altere)
 
  echo "Sua senha foi enviada com sucesso para o email: $email."; //resposta se o email foi enviado com sucesso
  } else {
    echo "Seu email está incorreto."; //resposta se não foi possivel enviar o email
}