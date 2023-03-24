<?php
//session_start();
include_once 'conexao.php';
    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        
        //Alterando dados no banco para cadastro
        if(isset($_POST['codigo'])  && (isset($_POST['datan'])) (isset($_POST['fabricante']))){

            $result = "UPDATE cadastromedicamentos SET codigo ='$codigo', validade = '$data', fabricante='$fabricante' WHERE id= '$id' "; 
            $resulta_dados = mysqli_query($conexao, $result) or die('Erro ao alterar');
            echo"ALteração feita com sucesso";

        }
       


    }
?>