<?php
    include_once 'conexao.php';
?>
<?php

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
    <link rel="stylesheet" type="text/css" href="style.css">
    <title> Medicamentos </title>
</head>

<body>

    <div class="Divtelainicial">

        <h1> Aletrar dados Medicamentos </h1>

        <form action="alterar.php" method="POST">

            <input type="numero" name="id" placeholder="Digite o id para alterar os"><br>
            <input type="numero" name="codigo" placeholder="Digite o novo codigo"><br>
            <input type="date" name="datan" placeholder="Digite a nova data"><br>
            <input type="fabricante" name="fabricante" placeholder="Digite o novo fabricante"><br>

            <input id="cadastrados" type="submit" name="submit" value="Alterar">

        </form>
        <br><br>

        <table border="1" width="100%">

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

                while ($row_usuario = mysqli_fetch_assoc($resulta_dados)) {

                    $id = $row_usuario['id'] . "<br>";
                    $codigo = $row_usuario['codigo'] . "<br>";
                    $data = $row_usuario['validade'] . "<br>";
                    $fabricante = $row_usuario['fabricante'] . "<br>";

                ?>
                    <tr>
                        <td> <?php echo $id ?> </td>
                        <td> <?php echo $codigo ?> </td>
                        <td> <?php echo $data ?> </td>
                        <td> <?php echo $fabricante ?> </td>
                    </tr> <br>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>