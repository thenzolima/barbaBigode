CREATE DATABASE barbabigode;

USE barbabigode;

CREATE TABLE servico(
idServico int PRIMARY KEY AUTO_INCREMENT,
descricao varchar(50) NOT NULL,
preco float
);

CREATE TABLE filial(
idFilial int PRIMARY KEY AUTO_INCREMENT,
descricaoF varchar(50) NOT NULL,
localizacao varchar(50) NOT NULL,
responsavel varchar(50) NOT  NULL
);

CREATE TABLE atendimento(
idAtendimento int PRIMARY KEY AUTO_INCREMENT,
nome varchar(50) NOT NULL,
idServico int,
FOREIGN KEY (idServico) REFERENCES servico(idServico),
idFilial int,
FOREIGN KEY (idFilial) REFERENCES filial(idFilial),
dataAtendimento DATE NOT NULL,
horario varchar(20)
);