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
        <h2>lista</h2>
        <a href="create.php">Novo Cadastro</a>
        <br>
        <table>
            <thead>
                <tr>
                    <th>codigp</th>
                    <th>fornecedor</th>
                    <th>fabricante</th>
                    <th>preço</th>
                    <th>E</th>
                    <td>D</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $servidor = "localhost";
                $usuario = "root";
                $senha = "";
                $dbname = "db_projeto";
                
                //Criar a conexão
                $con = mysqli_connect ($servidor, $usuario, $senha, $dbname);

                if($con->connect_error) {
                    die("falha: " . $con->connect_error);
                }
                $sql= "SELECT * FROM medicamentos";
                $result = $con->query($sql);

                if(!$result){
                    die("Invalido " . $con->connect_error);
                }

                while($row = $result->fetch_assoc()){
                    echo "
                    <tr>
                    <td>$row[codigo]</td>
                    <td>$row[fornecedor]</td>
                    <td>$row[fabricante]</td>
                    <td>$row[preco]</td>
                    <td>
                        <a href='/NASSAU-2023.1-EQUIPE03/edit.php?codigo=$row[codigo]'>edit</a>
                        <a href='/NASSAU-2023.1-EQUIPE03/delete.php?codigo=$row[codigo]'>delete</a>
                    </td>
                </tr>
                    ";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>