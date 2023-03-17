<?php
//session_start();
include_once 'conexao.php';
    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        //inserindo dados no banco para cadastro
        $result = "DELETE * FROM  cadastrousuário WHERE id= '$id' "; 
        $resulta_dodados = mysqli_query($conexao, $result);
    }
?>