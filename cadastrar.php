<?php
//session_start();
if(isset($_POST['submit'])){

    $nome = ($_POST['nome']);
    $senha = ($_POST['senha']);
    $numero = $_POST['numero'];

    //inserindo dados no banco para cadastro
    $result = mysqli_query($conexao,
    "INSERT INTO cadastrousuário(nome,senha,numero)
     VALUES ('$nome','$senha','$numero')  ");

}

?>