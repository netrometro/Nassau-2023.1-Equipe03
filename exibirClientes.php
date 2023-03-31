<?php
$servername = "localhost";
$usurname = "root";
$password = "ju1@";
$dbname ="db_projeto";

//Criar a conexão
$conexao = mysqli_connect ($servername, $usurname, $password, $dbname);

//exibindo dados de medicamentos e usuários
$result = "SELECT * FROM db_projeto";
$resulta_dados = mysqli_query($conexao, $result);
$tabela = '<table border="1">';

while($row_usuario = mysqli_fetch_assoc($resulta_dados)){

                $id = $row_clientes['id']. "<br>";
                $codigo= $row_clientes['nome']. "<br>";
                $data = $row_clientes['email']. "<br>";
                $fabricante = $row_clientes['fabricante']. "<br>";
}

?>


<table border="1" width="100%">
    <tr>
        <td>Id</td>
        <td>Nome</td>
        <td>Email</td>
        <td>Telefone</td>
    </tr>
</table>