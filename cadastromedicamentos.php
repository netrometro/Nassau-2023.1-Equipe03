<?php
//session_start();
include_once 'conexao.php';

if(isset($_POST['submit'])){

    $codigo = ($_POST['codigo']);
    $data = ($_POST['datan']);
    $fabricante = $_POST['fabricante'];
    

    //inserindo dados no banco para cadastro
    $result = mysqli_query($conexao,
    "INSERT INTO cadastromedicamentos(codigo,validade,fabricante)
     VALUES ('$codigo','$data','$fabricante')  ");
    
    //exibindo dados de medicamentos e usuários
    $result = "SELECT * FROM cadastromedicamentos";
    $resulta_dados = mysqli_query($conexao, $result);
    $tabela = '<table border="1">';

}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title> Farmalog </title>
</head>
<body>

    <header class="headerctelacadastro">

        <h1 id="h1cadastro"> Cadastro de Medicamentos </h1>

    </header>
    
    <div class="Divtelainicial" >
      
        <h1>  Digite os dados </h1>
        <form action ="cadastromedicamentos.php" method="POST"> <!-- Criação de campos para preenchimento -->
           
            <input type="numero" name="codigo" placeholder="Digite seu codigo"><br><br>          
            <input type="date" name="datan" placeholder="Digite a data"><br><br>
            <input type="fabricante" name="fabricante" placeholder="Digite o fabricante"><br><br>
            
            <input id="cadastradados" type="submit" name="submit" value="Cadastrar"> <br><br><br> <!-- Criação de tecla de redirecionamento-->
            <br><br> <br><br> <br><br>
            <button id ="buttoninicio">  <a href="iniciologado.php"  style="text-decoration:none" > Voltar </button>
        </form>  
       
        <h1>  ALTERAR OU EXCLUIR DADOS</h1>
      <form action ="alterar.php" method="POST"> <!-- Criação de campos para preenchimento -->

          <input type="numero" name="id" placeholder="Digite o ID para alterar dados"><br><br>  
          <input type="numero" name="codigo" placeholder="Digite novo codigo"> <br><br>
          <input type="date" name="datan" placeholder="Digite nova validade"> <br><br>
          <input type="fabricante" name="fabricante" placeholder="Digite novo fabricante"> <br><br>
          
          <input id="cadastradados" type="submit" name="submit" value="ALTERAR"><br><br> 

          <br><br> 
      </form>

      <form action ="excluir.php" method="POST"> <!-- Criação de campos para preenchimento -->

          <input type="numero" name="id" placeholder="Digite o ID para excliuir dados"><br><br>
          <input id="cadastradados" type="submit" name="submit" value="EXCLUIR"> <br><br><br> <!-- Criação de tecla de redirecionamento-->
          <br><br> 
      </form>  
      <button id ="buttoninicio">  <a href="iniciologado.php"  style="text-decoration:none" > Voltar </button>
  
    
    </div>
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

            while($row_usuario = mysqli_fetch_assoc($resulta_dados)){

                $id = $row_usuario['id']. "<br>";
                $codigo= $row_usuario['codigo']. "<br>";
                $data = $row_usuario['validade']. "<br>";
                $fabricante = $row_usuario['fabricante']. "<br>";

        ?>    
        <tr>
            <td> <?php echo $id?> </td>
            <td> <?php echo $codigo?> </td>
            <td> <?php echo $data?> </td>
            <td> <?php echo $fabricante?> </td>
        </tr> <br>
        <?php
            }
        ?>
    </tbody>
</table>
    <footer>
        <p> BJJSoftware2023</p>
    </footer>
    
</body>
</html>