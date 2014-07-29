<!DOCTYPE html>
<html>
    <head>
        <title> Consulta de Usuários </title>
        <meta charset="UTF-8">
   </head>
<body>
<?php
require_once '../includes/funcoesUteis.inc';
validaAutenticacao('../frmlogin.php', 'ADM');
echo '<h2> Consulta de Usuários </h2>';

include 'conexao/conecta.inc';
$cod_usuario = $_REQUEST['COD_USUARIO'];
$sql = "SELECT * FROM  loginoficial3ddb.usuario WHERE COD_USUARIO = '$cod_usuario'";
$result = mysql_query($sql);
$usuario = mysql_fetch_array($result);
?>
       <table border='1' class='bd'>
           <tr>
               <td> Nome do Usuário </td>
               <td> Gênero </td>
               <td> Documento </td>
               <td> Celular </td>
               <td> CEP </td>
               <td> UF </td>
               <td> Endereço </td>
               <td> Bairro </td>
               <td> Cidade </td>
               <td> Email </td>
               <td> Senha </td>
               
           </tr>
           <?php 
		for($n = 0; $n < $n_res; $n++){
		$resultado = mysqli_fetch_assoc($res);
		echo'
        <tr>
          <td><center>'.$usuario['NOME_USUARIO'].'</center></td>
          <td><center>'.$usuario['SEXO_USUARIO'].'</center></td>
          <td><center>'.$usuario['DOCUMENTO_USUARIO'].'</center></td>
          <td><center>'.$usuario['CELULAR_USUARIO'].'</center></td>
          <td><center>'.$usuario['CEP_USUARIO'].'</center></td>
          <td><center>'.$usuario['UF_USUARIO'].'</center></td>
          <td><center>'.$usuario['ENDERECO_USUARIO'].'</center></td>
          <td><center>'.$usuario['BAIRRO_USUARIO'].'</center></td>
          <td><center>'.$usuario['CIDADE_USUARIO'].'</center></td>
          <td><center>'.$usuario['EMAIL_USUARIO'].'</center></td>
          <td><center>'.$usuario['SENHA_USUARIO'].'</center></td>    
          <td><label><center>
            <input type="radio" name="marca" id="marca" value="'.$resultado['id'].'" /></center>
          </label></td>
        </tr>
        ';}?>
         
<br /> <br />

<a href='indexadmin.php'> Retornar ao Index </a> <br />
<a href='../logout.php?p=frmlogin.php'><button> Logout </button></a>
</body>
</html>
