<?php
    //conexao com o banco
    include_once 'conexao.php';

    //exibindo dados de medicamentos e usuários
    $result = "SELECT * FROM cadastromedicamentos";
    $resulta_dados = mysqli_query($conexao, $result);
    $tabela = '<table border="1">';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> FramaLog </title>
</head>
<body>

<table border="1"> 

    <thead>
        <tr>
            <th>ID</th>
            <th>CÓDIGO</th>
            <th>DATA</th>
            <th>FABRICANTE</th>
        </tr>

    </thead>
    <tbody>
        <?php
        
        ?>
    </tbody>
</table>

    
</body>
</html>