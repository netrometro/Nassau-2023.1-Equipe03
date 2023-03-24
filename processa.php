<?php
session_start();

include_once("conexao.php");

$nome = filter_input (INPUT_POST, 'nome');
$cpf = filter_input (INPUT_POST, 'cpf');
$email = filter_input (INPUT_POST, 'email');
$telefone = filter_input (INPUT_POST, 'telefone');
$endereco = filter_input (INPUT_POST, 'endereco');
$sexo = filter_input (INPUT_POST, 'sexo');

$result_usuario = "INSERT INTO usuario (nome, cpf, email, telefone, endereco, sexo)
                    VALUE ('$nome', '$cpf', '$email', '$telefone', '$endereco', '$sexo')";

$resultado_usuario = mysqli_query($con, $result_usuario);

$codigo = filter_input (INPUT_POST, 'codigo');
$fornecedor = filter_input (INPUT_POST, 'fornecedor');
$fabricante = filter_input (INPUT_POST, 'fabricante');
$preco = filter_input(INPUT_POST,'preco');

$result_medicamento = "INSERT INTO medicamentos (codigo, fornecedor, fabricante, preco)
                        VALUE ('$codigo', '$fornecedor', '$fabricante', $preco)";




$resultado_medicamentos = mysqli_query($con, $result_medicamento);

if (mysqli_insert_id($con)){
    $_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso!</p>";
    header("Location: cadastro.php");
}else{
    $_SESSION['msg'] = "<p style='color:red;'>Usuário não cadastrado</p>";
    header("Location: cadastro.php");
}
//Status de confirmação de cadastro em medicamentos
if (mysqli_insert_id($con)){
    $_SESSION['msg'] = "<p style='color:green;'>Medicamento cadastrado com sucesso!</p>";
    header("Location: cadastraMedicamentos.php");
}else{
    $_SESSION['msg'] = "<p style='color:red;'>Medicamento não cadastrado</p>";
    header("Location: cadastraMedicamentos.php");
}


//consulta da tabela medicamentos


// echo "Nome: $nome <br>";
// echo "CPF: $cpf <br>";
// echo "E-mail: $email <br>";
// echo "Telefone: $telefone <br>";
// echo "Endereco: $endereco <br>";
// echo "Sexo: $sexo <br>";