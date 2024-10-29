<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registrar Empréstimo</title>
</head>
<body>
<?php
include "conexao.php";

$id_cliente = $_POST['id_cliente'];
$id_usuario = $_POST['id_usuario'];
$id_livro = $_POST['id_livro'];
$data_emprestimo = $_POST['data_emprestimo'];
$data_devolucao = $_POST['data_devolucao'];

$sql = "INSERT INTO cad_emprestimo (id_cliente, id_usuario, id_livro, data_emprestimo, data_devolucao)
        VALUES ('$id_cliente', '$id_usuario', '$id_livro', '$data_emprestimo', '$data_devolucao')";

if(mysqli_query($con, $sql)){
    echo "<div class='container'>";
    echo "Empréstimo registrado com sucesso!";
    echo "<br> <a href='emprestimo.html'>Registrar outro empréstimo</a>";
    echo "</div>";
} else {
    echo "<div class='container'>";
    echo "Erro no registro do empréstimo!";
    echo "<br> <a href='emprestimo.html'>Voltar</a>"; 
    echo "</div>";
}
?>
</body>
</html>
