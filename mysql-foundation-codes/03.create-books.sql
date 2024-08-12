CREATE TABLE livros (
    id_livro INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    id_autor INT,
    ano_publicacao INT,
    genero VARCHAR(50),
    quantidade INT DEFAULT 1,
    FOREIGN KEY (id_autor) REFERENCES autores(id_autor)
);
