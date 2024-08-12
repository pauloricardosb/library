---

# Sistema de Gestão de Acervo de Biblioteca

## Descrição

Este projeto é uma atividade de extensão que visa implementar um sistema informatizado para a gestão do acervo de uma biblioteca. O sistema foi desenvolvido para permitir um controle mais preciso e eficiente dos empréstimos e devoluções de livros, facilitando a administração do acervo e o acesso dos usuários às obras disponíveis.

## Funcionalidades

- **Gerenciamento de Livros**: Cadastro de livros, incluindo informações como título, autor, ano de publicação, gênero e quantidade disponível.
- **Gerenciamento de Autores**: Cadastro de autores, com informações pessoais e de suas obras.
- **Cadastro de Usuários**: Registra informações sobre os usuários da biblioteca, como nome, email e telefone.
- **Controle de Empréstimos**: Registra e gerencia empréstimos de livros, incluindo data de empréstimo e devolução.
- **Consultas e Relatórios**: Possibilita consultas de livros disponíveis, livros emprestados, usuários cadastrados, e empréstimos atrasados.

## Estrutura do Projeto

- `index.php`: Página inicial que lista todos os livros disponíveis no acervo.
- `livro.php`: Página de detalhes do livro selecionado, com opção para realizar o empréstimo.
- `usuario.php`: Página para cadastro de novos usuários e listagem dos usuários registrados.
- `emprestimos.php`: Página que exibe os empréstimos ativos, com status e informações de devolução.
- `conexao.php`: Script responsável pela conexão com o banco de dados MySQL.
- `style.css`: Arquivo de estilo básico para a interface do sistema.

## Requisitos

- **Servidor Web**: Apache ou Nginx.
- **PHP**: Versão 7.0 ou superior.
- **MySQL**: Banco de dados para armazenamento das informações.
- **Navegador Moderno**: Chrome, Firefox, Edge, ou Safari.

## Instalação

1. **Clone o repositório**:
   ```bash
   git clone https://github.com/pauloricardosb/library.git
   cd library
   ```

2. **Configuração do Banco de Dados**:
   - Crie um banco de dados MySQL chamado `biblioteca`.
   - Importe o arquivo SQL com a estrutura das tabelas (caso exista um script para isso).
   - Configure as credenciais de acesso ao banco de dados no arquivo `conexao.php`.

3. **Inicie o servidor web**:
   - Certifique-se de que o servidor web (Apache ou Nginx) esteja rodando.
   - Acesse o sistema através do navegador em `http://localhost/sistema-biblioteca`.

## Uso

- **Navegue para a página inicial** (`index.php`) para visualizar o acervo da biblioteca.
- **Cadastre novos usuários** na página `usuario.php`.
- **Gerencie empréstimos** na página de detalhes do livro (`livro.php`).
- **Visualize todos os empréstimos ativos** em `emprestimos.php`.

## Contribuição

Contribuições são bem-vindas! Sinta-se à vontade para abrir issues e pull requests com melhorias, correções ou novas funcionalidades.

## Licença

Este projeto está licenciado sob a licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.

---
