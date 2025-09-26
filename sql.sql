CREATE DATABASE loja;
USE loja;
CREATE TABLE usuarios(
id int(11) PRIMARY KEY AUTO_INCREMENT,
nome varchar(255),
quantidade varchar(255),
dia varchar(255),
ativo bit(1) DEFAULT b'1'
);