<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>
<body>
    <h1>Cadastrar usuário</h1>
    <?php
        if(isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>
    <!-- DADOS PESSOAIS USUÁRIO -->
    <form action="processa.php" method="post">
        <input type="text" name="nome" placeholder="Digite seu nome aqui">
        <input type="text" name="cpf" placeholder="Informe cpf">
        <input type="text" name="email" placeholder="Digite seu E-mail">
        <input type="text" name="telefone" placeholder="Digite numero de telefone">
        <input type="text" name="endereco" placeholder="Digite seu endereco">
        <input type="text" name="sexo" placeholder="Informe sexo 'M' / 'F'">
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>