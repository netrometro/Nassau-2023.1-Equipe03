<?php
//session_start();
include_once 'conexao.php';
    // aleterando dados banco de dados da tabela medicamentos....
    //condição de if com submit
    if(isset($_POST['submit'])){

        $id = $_POST['id'];
        $codigo = $_POST['codigo'];
        $data = $_POST['datan'];
        $fabricante = $_POST['fabricante'];

        //fazendo o update pelo id
        $result = "UPDATE cadastromedicamentos SET codigo ='$codigo', validade = '$data', fabricante='$fabricante' WHERE id= '$id' "; 
        $resulta_dados = mysqli_query($conexao, $result);
        //or die('Erro ao alterar');
        //echo"ALteração feita com sucesso";

    }
    header("location: editamedicamentos.php");
?>