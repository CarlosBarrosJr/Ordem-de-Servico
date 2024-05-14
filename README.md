# Ordem de Serviço
 Repositorio Faculdade

Repositorio criado para que possamos dar continuidade no nosso projeto.

Criar os bancos de dados:

1 - Para o Acesso restrito precisa desse banco de dados, script pra criar.

-- Create a new database
CREATE DATABASE sislogin;

-- Use the new database
USE sislogin;

-- Create a table
CREATE TABLE usuarios (
  id INT AUTO_INCREMENT,
  nome VARCHAR(255),
  email VARCHAR(255),
  usuario VARCHAR(255),
  senha VARCHAR(255),
  tipo CHAR(1),
  data DATE,
  PRIMARY KEY (id)
);

2 - criar banco de clientes

-- Create a new database
CREATE DATABASE cad_usuarios;

-- Use the new database
USE usuarios;

-- Create a table
CREATE TABLE usuarios (
  id INT AUTO_INCREMENT,
  nome VARCHAR(255),
  email VARCHAR(255),
  telefone VARCHAR(45),
  sexo VARCHAR(15),
  data_nasc DATE,
  cidade VARCHAR(255),
  estado VARCHAR(255),
  endereco VARCHAR(255),	
  PRIMARY KEY (id)
);
