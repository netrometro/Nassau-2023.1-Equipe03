<?php
$servername = "localhost";
$usurname = "root";
$password = "ju1@";
$dbname ="db_projeto";

//Criar a conexão
$conexao = mysqli_connect ($servername, $usurname, $password, $dbname);
?>

<table border="1" width="100%">
    <tr>
        <td>Id</td>
        <td>Nome</td>
        <td>Email</td>
        <td>Telefone</td>
    </tr>
</table>