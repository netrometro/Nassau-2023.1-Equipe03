<?php
session_start();

include_once("conexao.php");

$nome = filter_input (INPUT_POST, 'nome');
$cpf = filter_input (INPUT_POST, 'cpf');
$email = filter_input (INPUT_POST, 'email');
$telefone = filter_input (INPUT_POST, 'telefone');
$endereco = filter_input (INPUT_POST, 'endereco');
$sexo = filter_input (INPUT_POST, 'sexo');



// if (mysqli_insert_id($con)){
//     $_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso!</p>";
//     header("Location: cadastrar.php");
// }else{
//     $_SESSION['msg'] = "<p style='color:red;'>Usuário não cadastrado</p>";
//     header("Location: cadastrar.php");
// }

echo "Nome: $nome <br>";
echo "CPF: $cpf <br>";
echo "E-mail: $email <br>";
echo "Telefone: $telefone <br>";
echo "Endereco: $endereco <br>";
echo "Sexo: $sexo <br>";