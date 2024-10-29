<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro de Livro</title>
</head>
<body>
<?php
include "conexao.php";

$titulo = $_POST['titulo'];
$numero_paginas = $_POST['numero_paginas'];
$suporte_fisico = $_POST['suporte_fisico'];
$isbn = $_POST['isbn'];
$descricao = $_POST['descricao'];
$ficha = $_POST['ficha'];
$registro = $_POST['registro'];
$disponibilidade = $_POST['disponibilidade'];

$sql = "INSERT INTO cad_livro (titulo, numero_paginas, suporte_fisico, ISBN, descricao, ficha, registro, disponibilidade)
        VALUES ('$titulo', '$numero_paginas', '$suporte_fisico', '$isbn', '$descricao', '$ficha', '$registro', '$disponibilidade')";

if(mysqli_query($con, $sql)){
    echo "<div class='container'>";
    echo "Livro cadastrado com sucesso!";
    echo "<br> <a href='cadastro_livro.html'>Cadastrar outro livro</a>";
    echo "</div>";
} else {
    echo "<div class='container'>";
    echo "Erro no cadastro!";
    echo "<br> <a href='cadastro_livro.html'>Voltar</a>"; 
    echo "</div>";
}
?>
</body>
</html>
