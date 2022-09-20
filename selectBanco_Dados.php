<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php

    $nome_servidor = "localhost";
    $nome_usuario = "root";
    $senha_usuario = "";
    $nome_data_base = "base_dados_php";

    //cria a conexão
    $conexao = new mysqli($nome_servidor, $nome_usuario, $senha_usuario, $nome_data_base);

    //verifica a conexão com o banco de dados
    if($conexao->connect_error){
        die("Falha na conexão: ". $conexao->connect_error);
    }
    else{
        $sql = "SELECT id_cliente, nome_cliente, senha_cliente, email_cliente FROM clientes";
        $resultado = $conexao->query($sql);

        if($resultado->num_rows > 0){
            echo "<h1>Dados do cliente</h1>
            <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
            </tr>";
            while($row = $resultado->fetch_assoc()){
                echo "<tr>
                    <form action='' method='post'>
                    <td><input class='form-control' type='text' name='id' readonly value='" . $row['id_cliente'] . "'</td>
                    <td><input class='form-control' type='text' name='nome' value='"  . $row['nome_cliente'] . "'</td>
                    <td><input class='form-control' type='text' name='email' value='" . $row['email_cliente'] . "'</td>
                    <td><input class='form-control' type='text' name='senha' value='" . $row['senha_cliente'] . "'</td>
                    <td><input type='submit' value='Alterar' formaction='alterar.php' class='btn btn-light'></td>
                    <td><input type='submit' value='Deletar' formaction='exclusao.php' class='btn btn-danger'></td>
                    </form>
                    
                </tr>
             
                ";
                
                
            }
        }
        else{
            echo "0 Resultados!";
        }
        
        
        
        $conexao->close();
    }
?>