<?php
    
    include_once 'conexao.php';

    $result = "SELECT * FROM  cadastrousuário";
    $resulta_dodados = mysqli_query($conexao, $result);
    $tabela = '<table border="1">';

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Listagem de cadastro</title>
</head>
<body>
    <header class="headerctelacadastro">

        <h1 id="h1cadastro"> Cadastro de Farmaceutico </h1>

    </header>
    <div class="Divtelainicial" >
    <form action ="excluir.php" method="POST"> <!-- Criação de campos para preenchimento -->
           
        <input type="text" name="nome" placeholder="Digite o id para exclui dados "><br><br>           
        <input id="cadastradados" type="submit" value="Excluir" nome="submit"> 

        <input  type="submit"  value="Excluir" name ="submit"> <!-- Criação de tecla de redirecionamento-->

        <br><br> <br><br> <br><br><br><br><br><br>
        <button id ="buttoninicio">  <a href="iniciologado.php"  style="text-decoration:none" > Voltar </button>

    </form>  
    </div>

    <div class="tabela">
        <table border="1">
                <thead>
                    <tr>
                        <th> ID </th>
                        <th>NOME</th>
                        <th>SENHA</th>
                        <th>NUMERO</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    while($row_usuario = mysqli_fetch_assoc($resulta_dodados) ){
                   
                        $id = $row_usuario ['id']. "<br>"; 
                        $nome= $row_usuario['nome'] . "<br>";
                        $senha= $row_usuario['senha']. "<br>";
                        $numero= $row_usuario['numero']. "<br>";
                     
                    ?>  
                    <tr>
                        <td><?php echo $id ?></td>
                        <td><?php echo $nome ?></td>
                        <td><?php echo $senha ?></td>
                        <td><?php echo $numero ?></td>
                        
                    </tr> <br>
                    <?php
                    }
                    ?>

            </tbody>
          </table>
    </div> 

    <footer>
        <p> BJJSoftware2023</p>
    </footer>             
    
</body>
</html>