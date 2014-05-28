 <?php
echo '<meta charset=UTF-8>';
include_once 'conexao/conecta.inc';
$email = $_POST['login'];
$senha = $POST['senha'];
$nome = $_POST['nome'];
$tipoUsuario = 'RES';
$query = "INSERT INTO usuario(EMAIL_USUARIO,SENHA_USUARIO,NOME_USUARIO,TIPO_USUARIO)";
$query.= "VALUES('$email','$nome','$tipoUsuario')";

if(mysql_query($query)){
    echo '<script>alert("Cadastro efetuado com sucesso !")</script>';
    echo '< a href=frmlogin.php>Efetuar Login</a>';   
}else{
    echo '<script>
               alert("Não foi possivel seu cadastro!")
                location.href="index.php"
          </script>';   
}