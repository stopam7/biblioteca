<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Consulta de Empréstimos</title>
</head>
<body>
    <div class="container">
        <h1>Consulta de Empréstimos</h1>
        <table>
            <tr>
                <th>ID Empréstimo</th>
                <th>ID Cliente</th>
                <th>ID Usuário</th>
                <th>ID Livro</th>
                <th>Data do Empréstimo</th>
                <th>Data de Devolução</th>
            </tr>
            <tbody>
                <?php
                include "conexao.php";

                $sql = "SELECT * FROM cad_emprestimo";

                $dados = mysqli_query($con, $sql);

                while ($linha = mysqli_fetch_array($dados)){
                    $id_emprestimo = $linha['id_emprestimo'];
                    $id_cliente = $linha['id_cliente'];
                    $id_usuario = $linha['id_usuario'];
                    $id_livro = $linha['id_livro'];
                    $data_emprestimo = $linha['data_emprestimo'];
                    $data_devolucao = $linha['data_devolucao'];
                
                    echo "<tr>
                    <td>$id_emprestimo</td>
                    <td>$id_cliente</td>
                    <td>$id_usuario</td>
                    <td>$id_livro</td>
                    <td>$data_emprestimo</td>
                    <td>$data_devolucao</td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
        <br>
        <a href="index.html">Voltar</a>
    </div>
</body>
</html>
