<?php
include 'conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Biblioteca - Acervo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Acervo de Livros</h1>
    <table>
        <tr>
            <th>Título</th>
            <th>Autor</th>
            <th>Ano</th>
            <th>Gênero</th>
            <th>Quantidade</th>
        </tr>
        <?php
        $sql = "SELECT l.id_livro, l.titulo, a.nome AS autor, l.ano_publicacao, l.genero, l.quantidade
                FROM livros l
                JOIN autores a ON l.id_autor = a.id_autor";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td><a href='livro.php?id=".$row['id_livro']."'>" . $row['titulo'] . "</a></td>
                        <td>" . $row['autor'] . "</td>
                        <td>" . $row['ano_publicacao'] . "</td>
                        <td>" . $row['genero'] . "</td>
                        <td>" . $row['quantidade'] . "</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Nenhum livro encontrado</td></tr>";
        }
        ?>
    </table>
</body>
</html>
