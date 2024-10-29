<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Consulta de Livros</title>
</head>
<body>
    <div class="container-grande">
        <h1>Consulta de Livros</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Número de Páginas</th>
                <th>ISBN</th>
                <th>Descrição</th>
                <th>Registro</th>
                <th>Ficha</th>
                <th>Disponibilidade</th>
            </tr>
            <tbody>
                <?php
                include "conexao.php";

                $sql = "SELECT * FROM cad_livro";
                $dados = mysqli_query($con, $sql);

                while ($linha = mysqli_fetch_array($dados)){
                    $id_livro = $linha['id_livro'];
                    $titulo = $linha['titulo'];
                    $numero_paginas = $linha['numero_paginas'];
                    $isbn = $linha['ISBN'];
                    $descricao = $linha['descricao'];
                    $ficha = $linha['ficha'];
                    $registro = $linha['registro'];
                    $disponibilidade = $linha['disponibilidade'];
                
                    echo "<tr>
                    <td>$id_livro</td>
                    <td>$titulo</td>
                    <td>$numero_paginas</td>
                    <td>$isbn</td>
                    <td>$descricao</td>
                    <td>$ficha</td>
                    <td>$registro</td>
                    <td>$disponibilidade</td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
        <br>
        <a href="index.html">Voltar</a>
    </div>
    
    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
          <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>
</body>
</html>