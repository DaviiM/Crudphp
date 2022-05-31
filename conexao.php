<?php

$servidor = 'localhost';
$banco = 'id18842366_db_login';
$usuario = 'id18842366_root';
$senha = '=HNFbmNh70}Dap33';
#$porta;

$conn = mysqli_connect($servidor, $usuario, $senha, $banco);

if(!$conn){
	die("A conexão falhou: ". msyqli_connect_error());
}
#echo "A conexão foi efetuada com sucesso";
#echo "<br>"

?>