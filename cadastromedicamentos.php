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
  

}

?>
<!DOCTYPE html>
<html lang="en">
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
            <input type="data" name="datan" placeholder="Digite a data"><br><br>
            <input type="fabricante" name="fabricante" placeholder="Digite o fabricante"><br><br>
            
            <input id="cadastradados" type="submit" name="submit" value="Cadastrar"> <br><br><br> <!-- Criação de tecla de redirecionamento-->
            <br><br> <br><br> <br><br>
            <button id ="buttoninicio">  <a href="iniciologado.php"  style="text-decoration:none" > Voltar </button>
        </form>  
       
    
    </div>
    <footer>
        <p> BJJSoftware2023</p>
    </footer>
    
</body>
</html>