<?php

$nome_servidor = "localhost";
$nome_usuario = "root";
$senha_usuario = "";
$nome_data_base = "base_dados_php";

$idCliente = $_POST["id"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

//cria a conexão
$conexao = new mysqli($nome_servidor, $nome_usuario, $senha_usuario, $nome_data_base);

//verifica a conexão com o banco de dados
if($conexao->connect_error){
    die("Falha na conexão: ". $conexao->connect_error);
}
else{
    $sql = "UPDATE clientes SET nome_cliente='$nome', email_cliente='$email', senha_cliente='$senha' WHERE id_cliente=$idCliente";

    if ($conexao->query($sql) === TRUE) {
        echo " <h1>REGISTRO ALTERADO COM SUCESSO!</h1>";
    }
    else {
        echo "Error updating record: " . $conexao->error;
    }

    $conexao->close();
}