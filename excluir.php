<?php
//session_start();
include_once 'conexao.php';

    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        //Deletando dados no banco para cadastro
        $result = "DELETE FROM  cadastromedicamentos WHERE id= '$id' "; 
        $resulta_dados = mysqli_query($conexao, $result) or die('Erro ao deletar');
        echo"deletado";
    }
?>