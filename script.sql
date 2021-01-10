CREATE DATABASE mgstore;

USE mgstore;

CREATE TABLE categoria(
    idcategoria INT NOT NULL AUTO_INCREMENT,
    descricao VARCHAR(50) NOT NULL,
    PRIMARY KEY(idcategoria)
);

CREATE TABLE produto(
    idproduto INT(11) NOT NULL AUTO_INCREMENT,
    idcategoria INT NOT NULL,
    preco DOUBLE NOT NULL,
    nomeproduto VARCHAR(30) NOT NULL,
    descricao VARCHAR(60) NOT NULL,
    imagem VARCHAR(60) NOT NULL,
    estoque_minimo INT(11) NOT NULL,
    estoque_maximo INT(11) NOT NULL,
    quant_estoque INT,
    PRIMARY KEY(idproduto),
    FOREIGN KEY(idcategoria) REFERENCES categoria(idcategoria)
);

CREATE TABLE usuario(
    cpf BIGINT NOT NULL,
    nomeusuario VARCHAR(60) NOT NULL,
    email VARCHAR(60) NOT NULL,
    senha VARCHAR(12) NOT NULL,
    datadenascimento DATE NOT NULL,
    sexo CHAR(1) NOT NULL,
    tipousuario VARCHAR(10) NOT NULL,
    PRIMARY KEY(cpf)
);

CREATE TABLE endereco(
    idendereco INT(11) NOT NULL AUTO_INCREMENT,
    cpf BIGINT NOT NULL,
    logradouro VARCHAR(60) NOT NULL,
    numero VARCHAR(7) NOT NULL,
    complemento VARCHAR(60) NULL,
    bairro VARCHAR(60) NOT NULL,
    cidade VARCHAR(60) NOT NULL,
    cep VARCHAR(60) NOT NULL,
    PRIMARY KEY(idendereco),
    FOREIGN KEY(cpf) REFERENCES usuario(cpf)
);
