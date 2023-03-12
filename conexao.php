<?php
$hostname = 'localhost';
$bancodedados = 'db_projeto';
$usuario = 'root';
$senha = 'ju1@';

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if($mysqli -> connect_errno){
    echo "falha ao conectar (" . $mysqli -> connect_errno .") " . $mysqli -> connect_errno;
}