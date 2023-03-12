<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>
<body>
    <!-- DADOS PESSOAIS USUÁRIO -->
    <form action="envio_dados.php" method="post">
        <input type="text" name="nome" placeholder="Digite seu nome aqui">
        <input type="text" name="email" placeholder="Digite seu E-mail">
        <input type="text" name="endereco" placeholder="Digite seu endereco">
        <input type="submit" name="enviar" value="Enviar">
    </form>
</body>
</html>