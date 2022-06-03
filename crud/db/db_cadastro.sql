CREATE DATABASE IF NOT EXISTS cadastro;

USE cadastro;

CREATE TABLE produtos (id int not null auto_increment, 
nome_produto varchar (40), 
descricao_produto varchar (100), 
valor_produto decimal (8,2), 
fornecedor_produto varchar (20)); 