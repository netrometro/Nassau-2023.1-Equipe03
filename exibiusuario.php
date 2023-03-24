<?php
    //conexao com o banco
    include_once 'conexao.php';

    //exibindo dados de medicamentos e usuários
    $result = "SELECT * FROM cadastromedicamentos";
    $resulta_dados = mysqli_query($conexao, $result);
    $tabela = '<table border="1">';


?>
<!DOCTYPE html>
<html lang="pt-br">
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
            <th>DATA VALIDADE </th>
            <th>FABRICANTE</th>
        </tr>

    </thead>
    <tbody>
        <?php

            while($row_usuario = mysqli_fetch_assoc($resulta_dados)){

                $id = $row_usuario['id']. "<br>";
                $id = $row_usuario['codigo']. "<br>";
                $id = $row_usuario['validade']. "<br>";
                $id = $row_usuario['fabricante']. "<br>";

        ?>    
        <tr>
            <td> <?php echo $id?> </td>
            <td> <?php echo $codigo?> </td>
            <td> <?php echo $validade?> </td>
            <td> <?php echo $fabricante?> </td>
        </tr> <br>
        <?php
            }
        ?>
    </tbody>
</table>

    
</body>
</html>