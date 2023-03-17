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
        <form action ="" method="POST"> <!-- Criação de campos para preenchimento -->
                        
           <label  id="" for="Nome">
              <input type="nome" name="nome" method="POST" placeholder="Nome">
           </label> <br>
            <label   id="" for="Senha">
              <input type="numero" name="codigo" required method="POST" placeholder="Codigo">
            </label><br>
            <label   id="" for="Senha">
              <input type="text" name="nomefabricante" required method="POST" placeholder="Fabricante">
            </label><br>
            
                <input id="cadastradados" type="submit" value="Cadastrar"> <br><br><br> <!-- Criação de tecla de redirecionamento-->
                <br><br> <br><br> <br><br>
                <button id ="buttoninicio">  <a href="iniciologado.php"  style="text-decoration:none" > Voltar </button>
        </form>  
        <?php
         include ("conexao.php");
         $sql =" INSERT INTO cadastrousuário(nome, senha, numero) VALUES (nome, codigo,nomefabricante )";
        if( $conn->query($sql)== true){

            echo"Inseridos";

        }else{
            echo"ERRO: ". $sql."<br>". $conn->error;
        }
        $conn->close();
        ?> 
    
    </div>
    <footer>
        <p> BJJSoftware2023</p>
    </footer>
    
</body>
</html>