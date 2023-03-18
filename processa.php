<?php
session_start();

include_once("conexao.php");

$nome = filter_input (INPUT_POST, 'nome');
$cpf = filter_input (INPUT_POST, 'cpf');
$email = filter_input (INPUT_POST, 'email');
$telefone = filter_input (INPUT_POST, 'telefone');
$endereco = filter_input (INPUT_POST, 'endereco');
$sexo = filter_input (INPUT_POST, 'sexo');

$result_usuario = "INSERT INTO usuario (nome, cpf, email, telefone, endereco, sexo) VALUES ('$nome', '$cpf', '$email', '$telefone', '$endereco', '$sexo')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

$codigo = filter_input (INPUT_POST, 'codigo');
$fornecedor = filter_input (INPUT_POST, 'fornecedor');
$fabricante = filter_input (INPUT_POST, 'fabricante');

$result_medicamento = "INSERT INTO medicamentos (codigo, fornecedor, fabricante) VALUES ('$codigo', '$fornecedor', '$fabricante')";
$resultado_medicamento = mysqli_query($conn, $result_medicamento);

if (mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso!</p>";
    header("Location: cadastrar.php");
}else{
    $_SESSION['msg'] = "<p style='color:red;'>Usuário não cadastrado</p>";
    header("Location: cadastrar.php");
}

// echo "Nome: $nome <br>";
// echo "CPF: $cpf <br>";
// echo "E-mail: $email <br>";
// echo "Telefone: $telefone <br>";
// echo "Endereco: $endereco <br>";
// echo "Sexo: $sexo <br>";