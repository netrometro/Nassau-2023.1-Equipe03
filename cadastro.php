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
    <h1>Cadastrar Usuarios</h1>
    <?php
        if(isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>
    <!-- DADOS CADASTRO DE USUÁRIOS -->
    <form action="processa.php" method="post">
        <input type="text" name="nome" placeholder="Digite seu nome">
        <input type="text" name="cpf" placeholder="Informe CPF">
        <input type="text" name="email" placeholder="informe seu E-mail">
        <input type="text" name="telefone" placeholder="informe seu telefone">
        <input type="text" name="endereco" placeholder="informe endereço">
        <input type="text" name="email" placeholder="Digite seu gênero">
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>