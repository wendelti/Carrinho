
CREATE DATABASE carrinhoDB;

\c carrinhoDB;

CREATE TABLE carrinhos (
    id SERIAL PRIMARY KEY,
    numero INT NOT NULL,
    alugadoPor VARCHAR(255) NOT NULL,
    local VARCHAR(255) NOT NULL,
    status VARCHAR(50) NOT NULL DEFAULT 'Alugado'
);

CREATE TABLE locais (
    id SERIAL PRIMARY KEY,
    nome VARCHAR(255) NOT NULL
);

INSERT INTO locais (nome) VALUES 
    ('Praça Central'),
    ('Estádio Municipal'),
    ('Parque da Cidade'),
    ('Shopping Center'),
    ('Feira Livre'),
    ('Praia Principal'),
    ('Centro Comunitário'),
    ('Estação de Trem'),
    ('Rua do Comércio'),
    ('Jardim Botânico');
