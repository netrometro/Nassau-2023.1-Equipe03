
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

        <h1 id="h1cadastro"> Cadastro de Farmaceutico </h1>

    </header>
    
    <div class="Divtelainicial" >
        
        <h1>  Digite os dados </h1>
        <form action ="cadastro.php" method="POST"> <!-- Criação de campos para preenchimento -->
           
            <input type="text" name="nome" placeholder="Digite seu nome"><br><br>          
            <input type="password" name="senha" placeholder="Digite sua senha"><br><br>
            <input type="numero" name="numero" placeholder="Digite sua numero"><br><br>
        
            <input  id ="inputsubmit" type="submit"  value="Cadastrar" name ="submit"> <!-- Criação de tecla de redirecionamento-->
            <br><br> <br><br> <br><br><br>
            <button id ="buttoninicio">  <a href="iniciologado.php"  style="text-decoration:none" > Voltar </button>

            <button id ="inputsubmit">  <a href="exibidadosfarmaceutico.php"  style="text-decoration:none" > Visualiza dados </button>
        </form>   
        
    
    </div>
    <footer>
        <p> BJJSoftware2023</p>
    </footer>
    
</body>
</html>