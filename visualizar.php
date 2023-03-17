<?php
    
    include_once 'conexao.php';
    $result = "SELECT * FROM  cadastrousuário";
    $resulta_dodados = mysqli_query($conexao, $result);
    $tabela = '<table border="1">';

?>
<body>

<header class="headerctelacadastro">

    <h1 id="h1cadastro"> Cadastro de Farmaceutico </h1>

</header>

<div class="Divtelainicial" >
    
    <h1> Farmaceutico cadastrados </h1>
    
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
                        $celular= $row_usuario['senha']. "<br>";
                        $cidade= $row_usuario['numero']. "<br>";
                     
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
    <p> BJJSoftware2023 </p>
</footer>

</body>