<?php
if (isset($_GET['codigo'])) {
    $codigo = $_GET['codigo'];

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "db_projeto";

    //Criar a conexão
    $con = mysqli_connect($servidor, $usuario, $senha, $dbname);

    $sql = "DELETE FROM medicamentos WHERE codigo = $codigo";
    $con->query($sql);
    
}

header("location: /NASSAU-2023.1-EQUIPE03/cadastraMedicamentos.php");
        exit;
?>