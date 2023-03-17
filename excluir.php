<?php
//session_start();
include_once 'conexao.php';

if(isset($_POST['submit'])){

    $id= ($_POST['id']);

    //inserindo dados no banco para cadastro
    $result = mysqli_query($conexao,
    "DELETE cadastrousuário(nome,senha,numero)
     VALUES ('$nome','$senha','$numero')  ");

}

?>