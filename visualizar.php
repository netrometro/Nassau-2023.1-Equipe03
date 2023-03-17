<?php

    $result = "SELECT * FROM  cadastrousuário";
    $resulta_dodados = mysqli_query($conexao, $result);
    $tabela = '<table border="1">';

?>
<body>

<header class="headerctelacadastro">

    <h1 id="h1cadastro"> Cadastro de Farmaceutico </h1>

</header>

<div class="Divtelainicial" >
    
    <h1>  Lista de cadastrados </h1>
    <form action ="cadastro.php" method="POST"> <!-- Criação de campos para preenchimento -->
       
        <input type="text" name="nome" placeholder="Digite seu nome"><br><br>          
        <input type="password" name="senha" placeholder="Digite sua senha"><br><br>
        <input type="numero" name="numero" placeholder="Digite sua numero"><br><br>
    
        <input  id ="inputsubmit" type="submit"  value="Cadastrar" name ="submit"> <!-- Criação de tecla de redirecionamento-->
        <br><br> <br><br> <br><br><br><br><br><br>
        <button id ="buttoninicio">  <a href="iniciologado.php"  style="text-decoration:none" > Voltar </button>
    </form>  
    

</div>
<footer>
    <p> BJJSoftware2023 </p>
</footer>