CREATE DATABASE servidor;
USE servidor;
CREATE TABLE usuarios(
id int(11) PRIMARY KEY AUTO_INCREMENT,
nome varchar(255),
gmail varchar(255),
senha varchar(255),
ativo bit(1) DEFAULT b'1'
);