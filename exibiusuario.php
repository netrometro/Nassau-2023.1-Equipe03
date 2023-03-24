<?php
    //conexao com o banco
    include_once 'conexao.php';

?>
<?php

 //exibindo dados de medicamentos e usuários
        $result = "SELECT * FROM cadastromedicamentos";
        $resulta_dados = mysqli_query($conexao, $result);
        $tabela = '<table border="1">';

?>       
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> FramaLog </title>
</head>
<body>
<div class="Divtelainicial" >
      
      <h1>  ALTERAR OU EXCLUIR DADOS</h1>
      <form action ="alterar.php" method="POST"> <!-- Criação de campos para preenchimento -->

          <input type="numero" name="id" placeholder="Digite o ID para alterar dados"><br><br>  
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

    
</body>
</html>