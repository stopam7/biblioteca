<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro de Cliente</title>
</head>
<body>
<?php
include "conexao.php";

$nome = $_POST['nome'];
$sexo = $_POST['sexo'];
$estado_civil = $_POST['estado_civil'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$profissao = $_POST['profissao'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$data_cadastro = $_POST['data_cadastro'];

$sql = "INSERT INTO cad_cliente (nome, sexo, estado_civil, endereco, cidade, profissao, CPF, telefone, data_cadastro)
        VALUES ('$nome', '$sexo', '$estado_civil', '$endereco', '$cidade', '$profissao', '$cpf', '$telefone', '$data_cadastro')";

if(mysqli_query($con, $sql)){
    echo "<div class='container'>";
    echo "Cliente cadastrado com sucesso!";
    echo "<br> <a href='cadastro_cliente.html'>Cadastrar outro cliente</a>";
    echo "</div>";
} else {
    echo "<div class='container'>";
    echo "Erro no cadastro!";
    echo "<br> <a href='cadastro_cliente.html'>Voltar</a>"; 
    echo "</div>";
}
?>
</body>
</html>