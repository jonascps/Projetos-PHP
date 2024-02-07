CREATE TABLE posts (
    id INT PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(255),
    conteudo TEXT,
    autor_id INT,
    data_publicacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (autor_id) REFERENCES usuarios(id)
);

CREATE TABLE usuarios (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50),
    email VARCHAR(50),
    senha VARCHAR(255)
);
CREATE TABLE comentarios (
    id INT PRIMARY KEY AUTO_INCREMENT,
    post_id INT,
    autor_id INT,
    conteudo TEXT,
    data_comentario TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (post_id) REFERENCES posts(id),
    FOREIGN KEY (autor_id) REFERENCES usuarios(id)
);

