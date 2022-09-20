<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclusao</title>
</head>
</html>

<?php


$nome_servidor = "localhost";
$nome_usuario = "root";
$senha_usuario = "";
$nome_data_base="base_dados_php";

$idCliente = $_POST["id"];


//cria a conexao
$conexao = new mysqli($nome_servidor, $nome_usuario, $senha_usuario, $nome_data_base);

//verifica a conexao com o banco de dados 
if($conexao->connect_error){
    die("Falha na conexao:" . $conexao->connect_error);
 }else{

    $sql = "DELETE FROM clientes WHERE id_cliente=$idCliente";

    if($conexao->query($sql) === TRUE) {
        echo "<h1>REGISTRO APAGADO COM SUCESSO</h1>";
    }else{
        echo "Error updating record". $conexao->error;
    }

    $conexao->close();
}

?>