<?php
//configuração 
$serverhost = 'localhost';
$user       = 'root';
$password   = '12345678';
$database   = 'loginoficial3ddb';
//Estabelecendo a conexão
$connection = mysql_connect($serverhost,$user,$password);
mysql_select_db($database,$connection);
//Executando a query
$result = mysql_query($query);
//Criando uma matriz para armazenar os emails cadastrados
$emailCadastrados = array();

//Carregando a matriz com os emails do banco de dados
while($usuario = mysql_fetch_assoc($result))
{
    $emailCadastrados[]=$usuario['EMAIL_USUARIO'];
}

// A função in_array(), verifica a existência de um certo valor dentro de uma matriz qualquer.
// A função recebe dois parâmetros: o valor a ser pesquisado e a matriz objeto da busca.
//Veja: 
if(in_array($email, $emailCadastrados))
{
    echo 'false';
}else{
    echo 'true';
}
exit();