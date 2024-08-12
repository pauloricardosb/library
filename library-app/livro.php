<?php
include 'conexao.php';

if (isset($_GET['id'])) {
    $id_livro = $_GET['id'];
    $sql = "SELECT l.titulo, a.nome AS autor, l.ano_publicacao, l.genero, l.quantidade
            FROM livros l
            JOIN autores a ON l.id_autor = a.id_autor
            WHERE l.id_livro = $id_livro";
    $result = $conn->query($sql);
    $livro = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title><?php echo $livro['titulo']; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1><?php echo $livro['titulo']; ?></h1>
    <p><strong>Autor:</strong> <?php echo $livro['autor']; ?></p>
    <p><strong>Ano de Publicação:</strong> <?php echo $livro['ano_publicacao']; ?></p>
    <p><strong>Gênero:</strong> <?php echo $livro['genero']; ?></p>
    <p><strong>Quantidade Disponível:</strong> <?php echo $livro['quantidade']; ?></p>

    <h2>Empréstimo</h2>
    <form action="emprestimos.php" method="post">
        <input type="hidden" name="id_livro" value="<?php echo $id_livro; ?>">
        <label for="usuario">Usuário:</label>
        <select name="id_usuario" required>
            <?php
            $sql = "SELECT id_usuario, nome FROM usuarios";
            $result = $conn->query($sql);

            while ($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id_usuario']."'>".$row['nome']."</option>";
            }
            ?>
        </select>
        <button type="submit" name="emprestar">Emprestar</button>
    </form>
</body>
</html>
