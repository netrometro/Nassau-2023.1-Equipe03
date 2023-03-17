<?php
$servername = "localhost";
$usurname = "root";
$password = "";
$dbname ="farmalog";

//criando conexão

$conexao = mysqli_connect($servername,$usurname,$password,$dbname)

/*if(! $conexao){

    die("Flaha na conexao:". mysqli_connect_error().$conexao);

}
echo "conectado!";*/
;
