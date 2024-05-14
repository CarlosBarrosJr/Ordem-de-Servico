# Ordem de Serviço
 Repositorio Faculdade

Repositorio criado para que possamos dar continuidade no nosso projeto.

tem que criar os arquivos mysql

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
