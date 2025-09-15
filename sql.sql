CREATE DATABASE servidor;
USE servidor;

CREATE TABLE usuario(
    nome VARCHAR(255) PRIMARY KEY,
    endereco VARCHAR(255),
    ativo TINYINT(1)
);