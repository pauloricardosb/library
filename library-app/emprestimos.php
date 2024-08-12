<?php
include 'conexao.php';

if (isset($_POST['emprestar'])) {
    $id_usuario = $_POST['id_usuario'];
    $id_livro = $_POST['id_livro'];

    $sql = "INSERT INTO emprestimos (id_usuario, id_livro) VALUES ('$id_usuario', '$id_livro')";
    if ($conn->query($sql) === TRUE) {
        $sql_update = "UPDATE livros SET quantidade = quantidade - 1 WHERE id_livro = $id_livro";
        $conn->query($sql_update);
        echo "Livro emprestado com sucesso!";
    } else {
        echo "Erro: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Empréstimos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Empréstimos Atuais</h1>
    <table>
        <tr>
            <th>Usuário</th>
            <th>Livro</th>
            <th>Data do Empréstimo</th>
            <th>Data de Devolução</th>
            <th>Status</th>
        </tr>
        <?php
        $sql = "SELECT u.nome AS usuario, l.titulo AS livro, e.data_emprestimo, e.data_devolucao, e.status
                FROM emprestimos e
                JOIN usuarios u ON e.id_usuario = u.id_usuario
                JOIN livros l ON e.id_livro = l.id_livro
                ORDER BY e.data_emprestimo DESC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>".$row['usuario']."</td>
                        <td>".$row['livro']."</td>
                        <td>".$row['data_emprestimo']."</td>
                        <td>".$row['data_devolucao']."</td>
                        <td>".$row['status']."</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Nenhum empréstimo encontrado</td></tr>";
        }
        ?>
    </table>
</body>
</html>
