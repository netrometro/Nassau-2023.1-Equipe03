<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "db_projeto";

//Criar a conexão
$con = mysqli_connect ($servidor, $usuario, $senha, $dbname);

$codigo ="";
$fornecedor="";
$fabricante="";
$preco="";

$errorMessage="";
$successMessage = ""; 

if( $_SERVER['REQUEST_METHOD'] == 'GET'){

    if( !isset($_GET["codigo"]) ){
        header("location: /NASSAU-2023.1-EQUIPE03/cadastraMedicamentos.php");
        exit;
    }

    $codigo = $_GET["codigo"];

    $sql = "SELECT * FROM medicamentos WHERE codigo = $codigo";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();

    if(!$row) {
        header("location: /NASSAU-2023.1-EQUIPE03/cadastraMedicamentos.php");
        exit;
    }

    $codigo = $row["codigo"];
    $fornecedor= $row["fornecedor"];
    $fabricante=$row["fabricante"];
    $preco=$row["preco"];

}
else{
 
    $codigo= $_POST["codigo"];
    $fornecedor= $_POST["fornecedor"];
    $fabricante=$_POST["fabricante"];
    $preco=$_POST["preco"];

    do{
        if(empty($codigo) || empty($fornecedor) || empty($fabricante) || empty($preco) ){
            $errorMessage = "campos sem preencher ";
            break;
        }

        $sql = "UPDATE  medicamentos " . 
                "SET fornecedor = '$fornecedor', fabricante = '$fabricante', preco = '$preco' " . 
                "WHERE codigo = '$codigo'";

        $result = $con->query($sql);

        if(!$result){
            $errorMessage = "Invalido" . $con->connect_error;
            break;

        }

        $successMessage = "sucesso";

        header("location: /NASSAU-2023.1-EQUIPE03/cadastraMedicamentos.php");
        exit;

    }while(false);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h2>novo cliente</h2>

        <?php
        if(!empty($errorMessage)){
            echo"
            <div>
            <strong>$errorMessage</strong>
            <button type='button' data-bs-dismiss='alert'></button>
        </div>
            ";
        }
        ?>

        <form method="post">
            <input type="hidden" name="codigo" value="<?php echo $codigo; ?>">
            <div>
                <label>fornecedor</label>
            </div>
            <div>
                <input type="text" name="fornecedor" value="<?php echo $fornecedor; ?>">
            </div>
            <div>
                <label>fabricante</label>
            </div>
            <div>
                <input type="text" name="fabricante" value="<?php echo $fabricante; ?>">
            </div>
            <div>
                <label>preço</label>
            </div>
            <div>
                <input type="text" name="preco" value="<?php echo $preco; ?>">
            </div>
            <?php
            /*if(!empty($successMessage)){
                echo"
                <div class='alert'>
                    <strong>$successMessage</strong>
                    <button type='button' data-bs-dismiss='alert'></button>
                </div>
                ";
                }*/ 
            ?>
            <div>
                <button type="submit" >cadastrar</button>
            </div>
            <div>
                <a href="/NASSAU-2023.1-EQUIPE03/cadastraMedicamentos.php" role="button">cancelar</a>
            </div>
        </form>
    </div>
</body>
</html>