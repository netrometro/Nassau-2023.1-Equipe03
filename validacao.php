<?php

// Tenta se conectar ao servidor MySQL
$servidor = "localhost";
$usuario = "root";
$senha = "ju1@";
$dbname = "db_projeto";

//Criar a conexão
$con = mysqli_connect($servidor, $usuario, $senha, $dbname);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
    echo "Passou";
}

$usuario_email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$usuario_email = mysqli_real_escape_string($con, $usuario_email);
$usuario_senha = mysqli_real_escape_string($con, $_POST['senha']);

$sql = "SELECT * FROM usuario WHERE TRIM(email) = '$usuario_email'";
$result = mysqli_query($con, $sql);
var_dump($result);
echo $usuario_email;
