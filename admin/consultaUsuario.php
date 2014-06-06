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
$sql = "SELECT * FROM  usuario WHERE COD_USUARIO = '$cod_usuario'";
$result = mysql_query($sql);
$usuario = mysql_fetch_array($result);
?>
       <table border='1' class='bd'>
           <tr>
               <td> Nome do Usuário </td>
               $sql = "SELECT NOME_USUARIO FROM loginoficial3ddb.usuario;
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
           
           <?php  while($usuario = mysql_fetch_array($sql))?>{
           <tr>    
               <td> <?php echo $usuario['NOME_USUARIO'] ?> </td>
               <td> <?php echo $usuario['SEXO_USUARIO'] ?> </td>
               <td> <?php echo $usuario['DOCUMENTO_USUARIO'] ?> </td>
               <td> <?php echo $usuario['CELULAR_USUARIO'] ?> </td>
               <td> <?php echo $usuario['CEP_USUARIO'] ?> </td>
               <td> <?php echo $usuario['UF_USUARIO'] ?> </td>
               <td> <?php echo $usuario['ENDERECO_USUARIO'] ?> </td>
               <td> <?php echo $usuario['BAIRRO_USUARIO'] ?> </td>
               <td> <?php echo $usuario['CIDADE_USUARIO'] ?> </td>
               <td> <?php echo $usuario['EMAIL_USUARIO'] ?> </td>
               <td> <?php echo $usuario['SENHA_USUARIO'] ?> </td>
           </tr>
           
       </table>    
             }
<br /> <br />

<a href='indexadmin.php'> Retornar ao Index </a> <br />
<a href='../logout.php?p=frmlogin.php'> Logout </a>
</body>
</html>
