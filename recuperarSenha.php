<?php
   include "config.php";

   //VOCÊ PRECISA INFORMAR QUE O POST VEM DE UM FORMOLÁRIO
   //ENTÃO, FICARIA ASSIM:
   
   if(isset($_POST[/* aqui você informa o parâmetro passado no submit do formulário */])){
	   
   $email = $_POST['email'];

  $consulta =  "SELECT * FROM usuarios WHERE user_email = '$email'";

  $resposta = mysql_num_rows($consulta);


if($resposta > 0 ){

	while($linha = mysql_fetch_array($resposta)){
		  $emailRecuperado = $linha["user_email"];
}


  $msg = "
              <h2 style='font-family:Verdana;'>Recuperação de Senha</h2><br/>
              <div style='Verdana; font-size:10pt;'>
                       Sua senha é: <span style='font-weight: bold;' $emailRecuperado</span>
              </div>";

$mensagem = $msg;
$destinatario = $email;
$assunto = "Recupeação de senha";
$headers = "Bcc: [email]umideal_speranza@hotmail.com[/email]";

ini_set('sendmail_from', 'umideal_speranza@hotmail.com');
mail($destinatario, $assunto, $mensagem, $headers);

}else{
  echo "Não Consta na base de dados";

}
   }
?>

//

<meta charset="iso-8859-1">

<?php 

include "conexao.php"; 

include "func.php";



$email	=	anti_injection($_POST['email']);



$sql_pesq	=	mysql_query("SELECT * FROM perfil WHERE email = '$email'");

$verifica	=	mysql_num_rows($sql_pesq);



if ($verifica == 0) {

	// E-mail não encontrado

	?>



<H2>E-mail inválido!</H2> 

Desculpe, mas o e-mail solicitado não &eacute; cadastrado.<br>

<br><br>

<br>

Entre em contato com o administrador do sistema.<br>

Se quiser tentar novamente, <a href="../">clique aqui</a>.

<br><br>

Obrigado.



<?php

} else {



$linha		=	mysql_fetch_array($sql_pesq);



// inclue os dados do usuario em variaveis

$id_usuario	=       $linha['id_usuario'];

$nome		=	$linha['nome'];

$usuario	= 	$linha['usuario'];



// gera uma nova senha aleatoria

$novasenha = geraSenha(9, true, false);

$senhamd5 = md5($novasenha);





// salva a nova senha md5 no banco

$query = "UPDATE perfil SET 

	senha = '$senhamd5'

	

	where id_usuario = ".$id_usuario;



$rs = mysql_query($query);







$formato = "\nContent-type: text/html";



$msg = "Olá, $nome. Recebemos uma solicitação para renovar sua senha.<br><br>";

$msg .= "Seu usuario: <strong>$usuario</strong><br>";

$msg .= "Sua <strong>nova</strong> senha: <strong>$novasenha</strong><br><br>";	

$msg .= "Caso não tenha solicitado esta ação. Acesse a sua conta e altere sua senha novamente.<br>";	

$msg .= "<br>";	

$msg .= "Obrigado.<br>";	



mail("$email","Nova Senha","$msg", "From: Sistema <sistema@sistema.com> ".$formato);



	// E-mail enviado

	?>

<H2>Senha enviada!</H2> 

Parabéns. Sua senha foi enviada para o e-mail solicitado.

<br>

Após verificar seu e-mail, retorne à página de login.<br>

Se preferir, <a href="../">clique aqui</a>.

<br><br>

Obrigado!



 <?php

}
// Pra que enviar a senha antiga para o email do usuário e após enviar tbém uma senha provisória ???
// Sendo que é a senha provisória é que foi atualizada no banco !!!

?>
