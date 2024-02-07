CREATE TABLE usuarios (
    id INT PRIMARY KEY,
    nome VARCHAR(50),
    email VARCHAR(50),
    senha VARCHAR(255),
    nivel_permissao INT
);

CREATE TABLE permissoes (
    id INT PRIMARY KEY,
    nome VARCHAR(50)
);

INSERT INTO permissoes (nome) VALUES
    ('administrador'),
    ('usuario_padrao');

INSERT INTO usuarios (nome, email, senha, nivel_permissao) VALUES
    ('Admin', 'admin@example.com', 'senha_hashed', 1); -- 1 representa o ID da permissão de administrador
     ('Padrão', 'padrao@example.com', 'senha_hashed', 2);-- 2 representa o ID da permissão de padrao
