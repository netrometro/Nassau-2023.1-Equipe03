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
$usuario_email = $_POST['email'];
$usuario_senha = $_POST['senha'];

$sql="SELECT * FROM usuario WHERE TRIM(email) = $usuario_email";
$result=mysqli_query($con,$sql);
var_dump($result);
echo $usuario_email;

// if ())
// {
// // Return the number of rows in result set
// $rowcount=mysqli_num_rows($result);
// printf("Result set has %d rows.\n",$rowcount);
// // Free result set
// //mysqli_free_result($result);
// }

//   if (mysqli_num_rows($query) === 0) {
//       // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
//       echo "Login inválido!";
//   } else {
//       // Salva os dados encontados na variável $resultado
//       $resultado = mysqli_fetch_assoc($query);
//   }

?>