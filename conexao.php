<?php
$hostname = 'localhost';
$bancodedados = 'db_projeto';
$usuario = 'root';
$senha = 'ju1@';

$con = new mysqli($hostname, $usuario, $senha, $bancodedados);
if($con -> connect_errno){
    echo "falha ao conectar (" . $mysqli -> connect_errno .") " . $mysqli -> connect_errno;
}else {
    echo "Conectado!";
}