<?php
 include_once 'conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Medicamentos </title>
</head>
<body>

    <div class ="telainicial">

        <h1>  Aletrar dados Medicamentos </h1>

        <form action = "alterar.php" method="POST">

            <input type= "numero" name ="id" placeholder="Digite o id para alterar os">
            <input type= "numero" name ="codigo" placeholder="Digite o novo codigo">
            <input type= "date" name ="datan" placeholder="Digite a nova data">
            <input type= "fabricante" name ="id" placeholder="Digite o novo fabricante">

        </form>
        <br><br>


    </div>
    
</body>
</html>