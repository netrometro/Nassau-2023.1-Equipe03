<?php
$servername = "localhost";
$usurname = "root";
$password = "ju1@";
$dbname ="db_projeto";

//criando conexão

$conexao = mysqli_connect($servername,$usurname,$password,$dbname)

/*if(! $conexao){

    die("Flaha na conexao:". mysqli_connect_error().$conexao);

}
echo "conectado!";*/
;
