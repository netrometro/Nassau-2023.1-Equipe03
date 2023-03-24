<?php
//session_start();
    include_once 'conexao.php';

    if(isset($_POST['submit'])){

        $codigo = ($_POST['codigo']);
        $data = ($_POST['datan']);
        $fabricante = $_POST['fabricante'];
    

        //inserindo dados no banco para cadastro
        $result = mysqli_query($conexao,
        "INSERT INTO cadastromedicamentos(codigo,validade,fabricante)
        VALUES ('$codigo','$data','$fabricante')  ");
  

    }

?>