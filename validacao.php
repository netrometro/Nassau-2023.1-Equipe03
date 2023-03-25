<?php

  // Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
//   if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']))) {
//       header("Location: index.php"); exit;
//   }

// Tenta se conectar ao servidor MySQL
$servidor = "localhost";
$usuario = "root";
$senha = "ju1@";
$dbname = "db_projeto";

//Criar a conexão
$con = mysqli_connect ($servidor, $usuario, $senha, $dbname);

$sql = "SELECT id, nome, senha FROM usuario WHERE (usuario = '".$usuario ."') AND (senha = '". sha1($senha) ."') AND (ativo = 1) LIMIT 1";
  $query = mysqli_query($sql);
  if (mysqli_num_rows($query) != 1) {
      // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
      echo "Login inválido!"; exit;
  } else {
      // Salva os dados encontados na variável $resultado
      $resultado = mysqli_fetch_assoc($query);
  }

?>