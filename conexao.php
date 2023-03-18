<?php
$servidor = "localhost";
$usuario = "root";
$senha = "ju1@";
$dbname ="db_projeto";

//criando conexão

$conn = mysqli_connect($servidor,$usuario,$senha,$dbname);

/*if(! $conexao){

    die("Flaha na conexao:". mysqli_connect_error().$conexao);

}
echo "conectado!";
*/