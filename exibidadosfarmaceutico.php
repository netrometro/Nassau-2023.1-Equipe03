<?php

    include_once 'conexao.php';

?>
<?php

    // exibindo dados de farmaceutico
    $result ="SELECT * FROM cadastrousuario";
    $resultado_dados = mysqli_query($conexao, $result);
    $tabela ='<table border="1">';

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FarmaLogo</title>
</head>
<body>

    <table border ="1" width="100%">
        <thead>
            <th> ID </th>
            <th> ID </th>
            <th> ID </th>
            <th> ID </th>
        </thead>
    </table>
    
</body>
</html>