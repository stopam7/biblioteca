<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro de Usuário</title>
</head>
<body>
<?php
include "conexao.php";

$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];
$sexo = $_POST['sexo'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$numero_cartao = $_POST['numero_cartao'];
$senha_cartao = $_POST['senha_cartao'];

$sql = "INSERT INTO cad_usuario (nome, data_nascimento, sexo, endereco, telefone, email, CPF, numero_cartao, senha_cartao)
        VALUES ('$nome', '$data_nascimento', '$sexo', '$endereco', '$telefone', '$email', '$cpf', '$numero_cartao', '$senha_cartao')";

if(mysqli_query($con, $sql)){
    echo "<div class='container'>";
    echo "Usuário cadastrado com sucesso!";
    echo "<br> <a href='cadastro_usuario.html'>Cadastrar outro usuário</a>";
    echo "</div>";
} else {
    echo "<div class='container'>";
    echo "Erro no cadastro: " . mysqli_error($con);
    echo "<br> <a href='cadastro_usuario.html'>Voltar</a>"; 
    echo "</div>";
}
?>
</body>
</html>