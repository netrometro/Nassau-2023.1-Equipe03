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
    <h1>Cadastrar medicamentos</h1>
    <?php
        if(isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>
    <!-- DADOS CADASTRO MEDICAMENTOS -->
    <form action="processa.php" method="post">
        <input type="text" name="codigo" placeholder="Digite o codigo do medicamento">
        <input type="text" name="fornecedor" placeholder="Informe fornecedor">
        <input type="text" name="fabricante" placeholder="informe fabricante">
        <input type="text" name="preco" placeholder="Valor do Medicamento">
        <input type="submit" value="Cadastrar">
    </form>

    <?php
        
        $conn = mysqli_connect("localhost","root","", "db_projeto");
        $resultado = mysqli_query($conn,"SELECT * FROM medicamentos");
        echo "<table>";
        echo "<tr><th>codigo</th><th>fornecedor</th><th>fabricante</th><th>preco</th></tr>";
        while ($linha = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";
        echo "<td>" . $linha['codigo'] . "</td>";
        echo "<td>" . $linha['fornecedor'] . "</td>";
        echo "<td>" . $linha['fabricante'] . "</td>";
        echo "<td>" . $linha['preco'] . "</td>";
        echo "</tr>";
}
echo "</table>";

   ?>
</body>
</html>