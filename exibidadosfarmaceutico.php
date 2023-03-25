<?php

    include_once 'conexao.php';

?>
<?php

    // exibindo dados de farmaceutico
    $result ="SELECT * FROM cadastrousuário";
    $resultado_dados = mysqli_query($conexao, $result);
    $tabela ='<table border="1">';

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>FarmaLogo</title>
</head>
<body>
<div class="tabelaexibidadosfarmaceuticos">
    <header class="headerctelacadastro">

        <h1 id="h1cadastro"> Cadastro de Medicamentos </h1>

    </header>
    <table class="tabelaexibidadosfarmaceuticos" border ="1" width="100%">
        <thead>
            <th> ID </th>
            <th> NOME </th>
            <th> SENHA </th>
            <th> NUMERO </th>
        </thead>
        <tbody>
            <?php

                while($row_usuario = mysqli_fetch_assoc($resultado_dados)){

                    $id= $row_usuario['id']."<br>";
                    $nome = $row_usuario['nome']."<br>";
                    $senha= $row_usuario['senha']."<br>";
                    $numero= $row_usuario['numero']."<br>";

                
            ?>
            <tr>
                <td> <?php echo $id?></td>
                <td> <?php echo $nome?></td>
                <td> <?php echo $senha?></td>
                <td> <?php echo $numero?></td>
            </tr><br>
            <?php
                }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>