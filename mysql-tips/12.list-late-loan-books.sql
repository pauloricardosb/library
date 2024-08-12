SELECT u.nome AS usuario, l.titulo AS livro, e.data_emprestimo, e.data_devolucao
FROM emprestimos e
JOIN usuarios u ON e.id_usuario = u.id_usuario
JOIN livros l ON e.id_livro = l.id_livro
WHERE e.data_devolucao < CURRENT_DATE AND e.status = 'Emprestado';
